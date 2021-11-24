<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ExamController extends BaseController
{
    public function show(Request $request,$id)
    {

        // Find the question, assuming the model is Question
        Result::updateOrCreate([
            'user_id' => $request->input('user_id'),
            'question_id' => $request->input('question'),
        ],[
            'user_id' => $request->input('user_id'),
            'question_id' => $request->input('question'),
            'answer_id'  => $request->input('answer'),
        ]);

        $question = Question::find($id);


        if(is_null($question))
        {
            return redirect()->route('examFinal');
        }else{
            $answer = $question->answers()->get();
            $question_list = Question::get();
            return view('Front.question', [
                'question' => $question ,
                'answer'   =>  $answer,
                'question_list' => $question_list
            ]);
        }

    }
    public  function exam($id)
    {
        $question = Question::find($id);
        $answer = $question->answers()->get();
        $question_list = Question::get();

        return view('Front.question', [
            'question' => $question ,
            'answer'   =>  $answer,
            'question_list' => $question_list
        ]);
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
        return view('Front.final');
    }
}