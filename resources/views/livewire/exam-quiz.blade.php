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
                                              @if(isset($questionAttemptedWithAnswer->answer_id)) @if($questionAttemptedWithAnswer->answer_id == $answer->id)  checked @else disabled @endif @else   @endif>
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

                                @if (Session::get('serial_id') == $question_list_val->serial)
                                    <div class="col-md-2" style="padding-top:5px;">
                                        <h4 style="background-color: #b10b60;padding-top:5px;">{{ $question_list_val->serial }}</h4>
                                    </div>
                                @else

                                <div class="col-md-2" style="padding-top:5px;">
                                    <h4 style="background-color: #e5127e;padding-top:5px;">{{ $question_list_val->serial }}</h4>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="trainer justify-content-between align-items-center">

                        </div>
                </div>
            </div>
        </div>


    </div>


</div>
