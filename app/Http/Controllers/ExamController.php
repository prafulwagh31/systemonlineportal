<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class ExamController extends BaseController
{
    public function show(Request $request,$id)
    {
        // $answerChecked = \App\Models\Result::where(['user_id' => \Illuminate\Support\Facades\Auth::user()->id,'question_id' => 9])->first();
        // dd($answerChecked);
        // Find the question, assuming the model is Question

        Result::updateOrCreate([
            'user_id' => Auth::user()->id,
            'question_id' => $request->input('question'),
        ],[
            'user_id' => Auth::user()->id,
            'question_id' => $request->input('question'),
            'answer_id'  => $request->input('answer'),
        ]);

        $question = Question::whereExam(2)->find($id);


        if(is_null($question))
        {
            return redirect()->route('examFinal');
        }else{



            $answer = $question->answers()->get();
            $question_list = Question::whereExam(2)->get();
            return view('Front.question', [
                'question' => $question ,
                'answer'   =>  $answer,
                'question_list' => $question_list
            ]);
        }

    }
    public  function exam(Request $request,$id)
    {

        $question = Question::whereExam(2)->first();
        $answer = $question->answers()->get();
        $question_list = Question::whereExam(2)->get();

        return view('Front.question', [
            'question' => $question ,
            'answer'   =>  $answer,
            'question_list' => $question_list
        ]);
    }

    public function user()
    {
        return view('Front.user');
    }

    public function profile()
    {
        return view('Front.profile');
    }

    public function instruction()
    {
        return view('Front.instruction');
    }

    public function examFinal()
    {
        $results = FacadesDB::table('results')->join('questionwithanswer','questionwithanswer.id','=','results.answer_id')
        ->join('question','question.id','=','results.question_id')->where('results.user_id','=',1)->get();

        return view('Front.review', [
            'results' => $results ,

        ]);
    }

    public function final()
    {
        Auth::logout();
        return view('Front.final');
    }

    public function userLogout()
    {
        Auth::logout();
        return view('Front.final');
    }

    public function updateNumber()
    {
        $userOnline = User::get();
        foreach($userOnline as $key =>  $user)
        {
            if($key > 0)
            {
                $firstUser =  User::where('hallticket', '!=' ,'')->orderBy('id','desc')->first();

                $number = $firstUser->hallticket + 1;
                $update = User::whereId($user->id)->update(['hallticket' => $number]);
            }


        }

    }

}
