<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use App\Models\Exam;
use App\Models\Category;
use App\Models\CorrectAnswer;
use App\Models\Question;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Questionwithanswer;
use Auth;
use App\Models\User;

class Controller extends BaseController
{
    public function home()
    {
      return view('home');
    }
    public function importExportView()
    {
       return view('import');
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    /*************** Exam Controller ********************* */
    public function addexam()
    {
      $examcategorydata = Category::all();
      return view('addexam',['examcategorydata' => $examcategorydata]);
    }
    public function createExam(Request $request)
    {
      $data = $request->validate([
        'title' => 'required',
        'category' => 'required',
        'agegroup' => 'required',
        'language' => 'required',
        'duration' => 'required',
        'noquestion' => 'required',
        'passmarks' => 'required',
        'status' => 'required',
        'type' => 'required',
        'cost' => 'required',
        'fromdate' => 'required',
        'todate' => 'required',
        'instruction' => 'required',
      ]);
      Exam::create($data);
      return redirect()->route('examlist')->with('message','Exam Added Successfully');
    }
    public function editExam($id)
    {
        $editexam = Exam::findOrFail($id);
        $examcategorydata = Category::all();
        return view('editExam',['editexam' => $editexam,'examcategorydata' => $examcategorydata]);
    }
    public function updateExam(Request $request,$id)
    {
        $exam = Exam::findOrFail($id);
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'agegroup' => 'required',
            'language' => 'required',
            'duration' => 'required',
            'noquestion' => 'required',
            'passmarks' => 'required',
            'status' => 'required',
            'type' => 'required',
            'cost' => 'required',
            'fromdate' => 'required',
            'todate' => 'required',
            'instruction' => 'required',
        ]);
        $exam->update($data);
        return redirect()->route('examlist')->with('message','Exam Update Successfully');
    }
    public function destroyExam($id)
    {
        Exam::findOrFail($id)->delete();

        return redirect()->route('examlist')
        ->with([
            'message' => 'Exam Deleted successfully.',
        ]);
    }
    public function examlist()
    {
      $listexam = Exam::paginate();
      return view('examlist',['listexam' => $listexam]);
    }

    /*************** Exam Category ********************* */
    public function examcategory()
    {
      return view('examcategory');
    }
    public function addExamcategory(Request $request)
    {
      $data = $request->validate([
        'category_name' => 'required',
        'description' => 'required',
      ]);
      Category::create($data);
      return redirect()->route('categorylist')->with('message','Exam Category Added Successfully');
    }
    public function editCategory($id)
    {
        $editcategory = Category::findOrFail($id);
        return view('editCategory',['editcategory' => $editcategory]);
    }
    public function updateCategory(Request $request,$id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
          'category_name' => 'required',
          'description' => 'required',
        ]);
        $category->update($data);
        return redirect()->route('categorylist')->with('message','Exam Category Update Successfully');
    }
    public function destroyCategory($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('categorylist')
        ->with([
            'message' => 'Exam Category Deleted successfully.',
        ]);
    }
    public function categorylist()
    {
      $categorylist = Category::paginate();
      return view('categorylist',['categorylist' => $categorylist]);
    }

    public function userList()
    {
       $users = DB::table('users_online')
            ->leftjoin('district', 'district.DistCode', '=', 'users_online.district')
            ->leftjoin('state', 'state.StCode', '=', 'users_online.state')
            ->leftjoin('countries', 'countries.country_code', '=', 'users_online.country')
            ->select('users_online.*', 'district.*', 'state.*', 'countries.*')
            ->paginate();
         return view('userlist',['users' => $users]);
    }

    public function searchUser(Request $request)
    {
        $search = $request->get('search');
         if($search != ''){
         $users = User::where('name','like', '%' .$search. '%')->paginate();
         $users->appends(array('search'=> $request->get('search'),));
         if(count($users )>0){
            return view('userlist',['users'=>$users]);
         }
         return back()->with('error','No results Found');

        }
    }
    /*************** Exam Question ********************* */
    public function addquestion()
    {
        $exams = Exam::get();
        return view('addquestion', compact('exams'));
    }
    public function createQuestion(Request $request)
    {
      $data = $request->validate([
        'exam' => 'required',
        'question' => 'required',
        'marks' => 'required',
        'status' => 'required',
      ]);
      $question = Question::create($data);
      foreach($request->input('answer') as $answer)
      {
        $info = ['questionid' => $question->id,'answer' => $answer];
        Questionwithanswer::create($info);
      }
      return redirect()->route('questionlist')->with('message','Question Added Successfully');
    }
    public function questionlist()
    {
      $questionlist = Question::paginate();
      return view('questionlist',['questionlist' => $questionlist]);
    }

    public function showQuestion($id)
    {
        $question = Question::findOrFail($id);
        $answer = Questionwithanswer::whereQuestionid($id)->get();
        $correctAnswer = CorrectAnswer::whereQuestionId($id)->first();
        return view('showquestion',['question' => $question , 'answer' => $answer ,'correctAnswer' => $correctAnswer]);
    }

    public function setAnswer(Request $request)
    {
        $data = $request->validate([
            'answer' => 'required',
        ]);

        CorrectAnswer::updateOrCreate([
            'question_id' => $request->input('question'),
        ],[
            'question_id' => $request->input('question'),
            'answer_id'  => $request->input('answer'),
        ]);
        return redirect()->route('questionlist')->with('message','Answer Set Successfully');
    }

    /*************** Front setting controller ********************* */
    public function websitesetting()
    {
      return view('websitesetting');
    }
    public function pagesetting()
    {
      return view('pagesetting');
    }
    public function socialsetting()
    {
      return view('socialsetting');
    }
    public function profile()
    {
      return view('profile');
    }
}
