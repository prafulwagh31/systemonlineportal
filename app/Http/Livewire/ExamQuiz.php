<?php

namespace App\Http\Livewire;

use App\Models\Result;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Livewire\Component;

class ExamQuiz extends Component
{
    public $questions;
    public $question_id;
    public $answer = NULL;
    public $questionCount;
    public $finalAnswers = [];

    protected $listeners = [
        'SubmitQuestion' ,'SetAnswer','TimeOut'
    ];
    public function mount($questions)
    {
        $this->questions = $questions;
        $this->questionCount = count($questions);
        $this->answer = NULL;
    }

    public function SetAnswer($key,$answerFinal)
    {
        $this->answer = $answerFinal;
    }

    public function TimeOut()
    {
        dd($this->finalAnswers);
        foreach($this->finalAnswers as $quiz)
        {

            Result::updateOrCreate([
                'user_id' => $quiz['user_id'],
                'question_id' => $quiz['question_id'],
            ],[
                'user_id' => $quiz['user_id'],
                'question_id' => $quiz['question_id'],
                'answer_id'  => $quiz['answer_id'],
            ]);
        }

        return redirect()->route('Final');
    }
    public function SubmitQuestion($key,$question_id,$serial)
    {

        $questionAttemptedWithAnswer = \App\Models\Result::where(['user_id' => \Illuminate\Support\Facades\Auth::user()->id,
        'question_id' => $question_id])->first();
        if(isset($questionAttemptedWithAnswer->answer_id))
        {
            $this->answer = $questionAttemptedWithAnswer->answer_id;
        }

        $data = [
            'question_id' => $question_id,
            'answer_id' => $this->answer,
            'user_id' => Auth::user()->getKey(),
        ];

        array_push($this->finalAnswers,$data);

        if($serial < $this->questionCount){
            $nextQuestion = $serial + 1;
            session(['serial_id' => $nextQuestion]);
            $this->answer = NULL;
        }else{

            foreach($this->finalAnswers as $quiz)
            {

                Result::updateOrCreate([
                    'user_id' => $quiz['user_id'],
                    'question_id' => $quiz['question_id'],
                ],[
                    'user_id' => $quiz['user_id'],
                    'question_id' => $quiz['question_id'],
                    'answer_id'  => $quiz['answer_id'],
                ]);
            }

            return redirect()->route('examFinal');

        }



    }

    public function render()
    {
        return view('livewire.exam-quiz');
    }
}
