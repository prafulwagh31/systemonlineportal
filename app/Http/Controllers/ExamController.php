<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use App\Models\UserExamAttempted;
use App\Models\QuestionAttemptedUsers;
use App\Models\CorrectAnswer;
use App\Models\FinalResult;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Session;

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
        
        QuestionAttemptedUsers::updateOrCreate([
            'user_id' => Auth::user()->id,
            'question_id' => $request->input('question'),
        ],[
            'user_id' => Auth::user()->id,
            'question_id' => $request->input('question'),
        ]);

        $questionDecode = base64_decode($id);
        $language = Session::get('language');
        $age = \Illuminate\Support\Facades\Auth::user()->age;
       
        if($age <= 12)
        {
          $agegroup = 'Under 12 years';
        }else if($age >= 13 && $age <= 17)
        {
          $agegroup = '13 to 17 years';
        }else if($age >= 18 && $age <= 30)
        {
          $agegroup = '18 to 30 years';
        }else if($age >= 30)
        {
          $agegroup = 'Above 30 years';
        }
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();
        $question = Question::whereExam($exam->id)->whereSerial($questionDecode)->first();

        

        if(is_null($question))
        {
            return redirect()->route('examFinal');
        }else{



            $answer = $question->answers()->get();
            $question_list = Question::whereExam($exam->id)->get();

            return view('Front.question', [
                'question' => $question ,
                'answer'   =>  $answer,
                'question_list' => $question_list,
                'exam' => $exam,
                'questionForward' => $question
            ]);
        }

    }
    public function examPreview(Request $request)
    {
        $profile = Auth::user();
        return view('Front.exam-preview',compact('profile'));
    }
    public  function exam(Request $request,$id)
    {
        $language = Session::get('language');
        $age = \Illuminate\Support\Facades\Auth::user()->age;
       
        if($age <= 12)
        {
          $agegroup = 'Under 12 years';
        }else if($age >= 13 && $age <= 17)
        {
          $agegroup = '13 to 17 years';
        }else if($age >= 18 && $age <= 30)
        {
          $agegroup = '18 to 30 years';
        }else if($age >= 30)
        {
          $agegroup = 'Above 30 years';
        }
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();
        $request->session()->put('examId', $exam->getKey());
      
        $question = Question::whereExam($exam->id)->first();
        // $questionForward = Question::whereExam($exam->id)->get();
       
        $answer = $question->answers()->get();
        $question_list = Question::whereExam($exam->id)->get();


        return view('Front.question', [
            'question' => $question ,
            'answer'   =>  $answer,
            'question_list' => $question_list,
            'exam' => $exam,
            'questionForward' => $question
        ]);
    }

    public function examNotAttempted(Request $request,$id)
    {

        $language = Session::get('language');
        $age = \Illuminate\Support\Facades\Auth::user()->age;
       
        if($age <= 12)
        {
          $agegroup = 'Under 12 years';
        }else if($age >= 13 && $age <= 17)
        {
          $agegroup = '13 to 17 years';
        }else if($age >= 18 && $age <= 30)
        {
          $agegroup = '18 to 30 years';
        }else if($age >= 30)
        {
          $agegroup = 'Above 30 years';
        }
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();
        
      
        $question = Question::whereId($id)->first();
        // $questionForward = Question::whereExam($exam->id)->get();
       
        $answer = $question->answers()->get();
        $question_list = Question::whereExam($exam->id)->get();


        return view('Front.question', [
            'question' => $question ,
            'answer'   =>  $answer,
            'question_list' => $question_list,
            'exam' => $exam,
            'questionForward' => $question
        ]);
    }
    public function user()
    {
        $attempted = UserExamAttempted::whereUserId(Auth::user()->getKey())->first();
        $profile = Auth::user();

        return view('Front.user',compact('attempted','profile'));
    }

    public function profile()
    {
        $profile = Auth::user();
        return view('Front.profile',compact('profile'));
    }

    public function instruction(Request $request)
    {
        $request->validate([
            'language' => 'required'
        ]);
        $language =$request->input('language');
        $age = \Illuminate\Support\Facades\Auth::user()->age;
       
        if($age <= 12)
        {
          $agegroup = 'Under 12 years';
        }else if($age >= 13 && $age <= 17)
        {
          $agegroup = '13 to 17 years';
        }else if($age >= 18 && $age <= 30)
        {
          $agegroup = '18 to 30 years';
        }else if($age >= 30)
        {
          $agegroup = 'Above 30 years';
        }
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();

        $request->session()->put('language', $request->input('language'));
        return view('Front.instruction',compact('exam'));
    }

    public function examFinal()
    {
        $language = Session::get('language');
        $age = \Illuminate\Support\Facades\Auth::user()->age;
       
        if($age <= 12)
        {
          $agegroup = 'Under 12 years';
        }else if($age >= 13 && $age <= 17)
        {
          $agegroup = '13 to 17 years';
        }else if($age >= 18 && $age <= 30)
        {
          $agegroup = '18 to 30 years';
        }else if($age >= 30)
        {
          $agegroup = 'Above 30 years';
        }
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();
        $results = FacadesDB::table('results')->leftjoin('questionwithanswer','questionwithanswer.id','=','results.answer_id')
        ->leftjoin('question','question.id','=','results.question_id')->where('results.user_id','=',Auth::user()->id)->get();

        UserExamAttempted::updateOrCreate([
            'user_id' => Auth::user()->id,
            'exam_id' => $exam->id
        ],[
            'user_id' => Auth::user()->id,
            'exam_id' => $exam->id,
            'status' => 'attempted'
        ]);


        return view('Front.review', [
            'results' => $results ,
            'exam' => $exam

        ]);
    }

    public function final()
    {
        $userAttempeteds = Result::whereUserId(Auth::user()->id)->get();
        $correctQuestion = 0;
        $marks = 0;
        foreach($userAttempeteds as $key => $userAttempeted)
        {
            $finalkey = $key + 1;
            $question = Question::find($userAttempeted->question_id);
            $correctAnswerFound = CorrectAnswer::whereQuestionId($userAttempeted->question_id)->first();
            if($correctAnswerFound->answer_id == $userAttempeted->answer_id)
            {
                $correctQuestion += 1;
                $marks += $question->marks;
            }
        }

        FinalResult::create([
                'user_id' => Auth::user()->id,
                'total_mark' => $marks,
                'correct_question' => $correctQuestion
            ]);

        Auth::logout();
        return view('Front.final');
    }

    public function userLogout()
    {

        $userAttempeteds = Result::whereUserId(Auth::user()->id)->get();
        $correctQuestion = 0;
        $marks = 0;
        foreach($userAttempeteds as $key => $userAttempeted)
        {
            $finalkey = $key + 1;
            $question = Question::find($userAttempeted->question_id);
            $correctAnswerFound = CorrectAnswer::whereQuestionId($userAttempeted->question_id)->first();
            if($correctAnswerFound->answer_id == $userAttempeted->answer_id)
            {
                $correctQuestion += 1;
                $marks += $question->marks;
            }
        }

        FinalResult::create([
                'user_id' => Auth::user()->id,
                'total_mark' => $marks,
                'correct_question' => $correctQuestion
            ]);

        $language = Session::get('language');
        $agegroup = Auth::user()->agegroup;
        $exam = Exam::where(['agegroup' => $agegroup,'language' => $language])->first();

        UserExamAttempted::updateOrCreate([
            'user_id' => Auth::user()->id,
            'exam_id' => $exam->id,
        ],[
            'user_id' => Auth::user()->id,
            'exam_id' => $exam->id,
            'status' => 'attempted'
        ]);
        
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
