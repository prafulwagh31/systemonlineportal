<div>

    <div class="">
        <h3>Question {{ Session::get('serial_id') }} of {{ $questionCount }}</h3>
    </div>
    <div class="row">

        <div class="col-lg-8 col-md-6 ">
            <div class="course-item">
                <div class="course-content">

                    @foreach ($questions as $key => $question)
                        @if (Session::get('serial_id') == $question->serial)
                            @php
                                $questionAttemptedWithAnswer = \App\Models\Result::where(['user_id' => \Illuminate\Support\Facades\Auth::user()->id,
                                'question_id' => $question->id,])->first();
                                $finalAnsweArray = $finalAnswers;
                                $finalAnsweArrayReview = $finalAnswers;
                            @endphp


                            <input type="hidden" name="question_id" wire:model.defer="question_id">
                            <h3><a href="#">{{ strip_tags($question->question) }} </a></h3>
                            <div wire:loading.delay class="z-50 static absolute bg-gray-400 bg-opacity-50" wire:target="SubmitQuestion" style="">
                                <img src="https://paladins-draft.com/img/circle_loading.gif" width="64" height="64" class="m-auto mt-1/4 m-20 mt-5" style="justify-content: center;align-items: center;display: flex;">
                                <p  style="justify-content: center;align-items: center;display: flex;">Please Wait...</p>
                            </div>

                            <div class="trainer d-flex justify-content-between align-items-center relative">
                                <div class="trainer-profile ">
                                    @foreach ($question->answersArray as $answerkey =>  $answer)
                                        <p><input type="radio" name="answer" id="answer" wire:click="$emitUp('SetAnswer','{{ $answerkey }}','{{ $answer->getKey()}}')"
                                                @if(isset($questionAttemptedWithAnswer->answer_id))
                                                    @if($questionAttemptedWithAnswer->answer_id == $answer->id)
                                                        checked
                                                    @else
                                                        disabled
                                                    @endif
                                                @elseif(isset($finalAnsweArray))
                                                    @foreach($finalAnsweArray as $finalAnsweArrayVal)
                                                        @if($finalAnsweArrayVal['question_id'] == $question->id)
                                                            @if($finalAnsweArrayVal['answer_id'] == $answer->id)
                                                                checked
                                                            @else
                                                                disabled
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @else
                                                @endif

                                              >
                                            &nbsp;&nbsp;&nbsp;&nbsp;{{ strip_tags($answer->answer) }}</p>
                                    @endforeach
                                </div>
                            </div>
                            @error('answer')
                                <span style="color:red;">Please select answer and proceed</span>
                            @enderror

                            <button type="button" class="btn btn-primary "
                                style="margin-top:20px;float:right;background: #dd137b;border-color:#dd137b"
                                wire:click="SubmitQuestion('{{ $key }}','{{ $question->getKey() }}','{{ $question->serial }}')">Next</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
                <div class="course-content">
                    <h3><a href="course-details.html">Questions</a></h3>
                        <div class="row">
                            @foreach ($questions as $key => $question_list_val)
                                @php
                                    $questionAttemptedWithAnswerReview = \App\Models\Result::where(['user_id' => \Illuminate\Support\Facades\Auth::user()->id,
                                    'question_id' => $question_list_val->id])->first();

                                    if(isset($questionAttemptedWithAnswerReview->answer_id))
                                    {
                                        $class = 'completeclass';
                                    } else {
                                        $class = 'incomplete';
                                    }

                                    if(Session::get('serial_id') == $question_list_val->serial)
                                    {
                                        $class = 'activeclass';
                                    } elseif (isset($finalAnsweArrayReview))
                                    {
                                        foreach($finalAnsweArrayReview as $finalAnsweArrayReviewVal)
                                        {
                                            if($finalAnsweArrayReviewVal['question_id'] == $question_list_val->id)
                                            {
                                                if($finalAnsweArrayReviewVal['answer_id'] != '')
                                                {
                                                    $class = 'completeclass';
                                                }else {
                                                    $class = 'incomplete';
                                                }
                                            }
                                        }
                                    }
                                    else {
                                        $class = 'normalclass';
                                    }
                                @endphp

                                <div class="col-md-2" style="padding-top:5px;">
                                    <h5 class="@isset($class) {{ $class }} @endisset">
                                        <a wire:click="DirectQuestion('{{ $question_list_val->serial  }}')">
                                            {{ $question_list_val->serial }}
                                        </a>
                                    </h5>
                                </div>
                            @endforeach
                        </div>
                        <div class="trainer justify-content-between align-items-center">

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
