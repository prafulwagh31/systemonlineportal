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
use App\Models\Question;
use App\Models\Questionwithanswer;
use Auth;

class Controller extends BaseController
{
    public function home()
    {
      return view('home');
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

    /*************** Exam Question ********************* */
    public function addquestion()
    {
      return view('addquestion');
    }
    public function createQuestion(Request $request)
    {
      $data = $request->validate([
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
