<html>
    <title>Question</title>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Rishi Prasad Gyan Pratiyogita Exam Portal</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ url('frontassets/img/favicon.jpg') }}" rel="icon">
        <link href="{{ url('frontassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ url('frontassets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ url('frontassets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ url('frontassets/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Mentor - v4.3.0
        * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        @include('Front.timer');
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

              <div class="section-title">

                <p>Question - {{ $question->getKey()}}</p>
              </div>

              <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-8 col-md-6 ">
                <form action="{{route('question', ['id' => ($question->next()->getKey() + 1)])}}" method="POST">
                    @csrf
                  <div class="course-item">

                    <div class="course-content">
                     <h3><a href="#">{{ strip_tags($question->question) }}</a></h3>

                     <input type="hidden" name="user_id" value="1">
                        <input type="hidden" name="question" value="{{ $question->getKey()}}">
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile ">
                                @foreach ($answer as $answer_val)
                                <div class="col-lg-12"><p ><input type="radio" name="answer" id="answer" value="{{ $answer_val->id}}"> &nbsp;&nbsp;&nbsp;&nbsp;{{ strip_tags($answer_val->answer) }}</p></div>
                                @endforeach
                            </div>

                        </div>
                        @error('answer')
                            <span style="color:red;">Please select answer and proceed</span>
                        @enderror
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary " style="margin-top:20px;float:right;background: #dd137b;border-color:#dd137b">Next</button>
                </form>
                </div> <!-- End Course Item-->



                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                  <div class="course-item">

                    <div class="course-content">


                      <h3><a href="course-details.html">Questions</a></h3>
                      <div class="row">
                        @foreach ($question_list as $key =>  $question_list_val)
                        @php $keydata = $key + 1;

                        @endphp

                            @if(request()->route('id') == $keydata)

                            <div class="col-md-2" style="padding-top:5px;"><h4 style="background-color: blue;padding-top:5px;">{{$keydata}}</h4></div>

                            @elseif(request()->route('id') > $keydata)
                            @php
                            $answerChecked = \App\Models\Result::where(['user_id' => \Illuminate\Support\Facades\Auth::user()->id,'question_id' => $keydata])->first();
                            @endphp
                                @if(is_null($answerChecked->answer_id))
                                <div class="col-md-2" style="padding-top:5px;"><h4 style="background-color: red;padding-top:5px;">{{$keydata}}</h4></div>
                                @else
                                <div class="col-md-2" style="padding-top:5px;"><h4 style="background-color: green;padding-top:5px;">{{$keydata}}</h4></div>
                                @endif
                            @elseif(request()->route('id') < $keydata)
                            <div class="col-md-2" style="padding-top:5px;"><h4 style="background-color: #9f9999;padding-top:5px;">{{$keydata}}</h4></div>

                            @endif

                      @endforeach
                      </div>

                      {{-- @foreach ($question_list as $key =>  $question_list_val)
                      @php $keydata = $key + 1;@endphp
                      <div class="trainer-profile d-flex align-items-center">
                          @if(request()->route('id') == $keydata)
                          <h4 style="background-color: blue">{{$keydata}}</h4>
                          @elseif(request()->route('id') > $keydata)
                          <h4 style="background-color: green">{{$keydata}}</h4>
                          @elseif(request()->route('id') < $keydata)
                          <h4 style="background-color: #eee">{{$keydata}}</h4>
                          @endif
                      </div>
                    @endforeach --}}


                      <div class="trainer justify-content-between align-items-center">
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-md-2 ">
                                <h4 style="background-color: green;"></h4>
                            </div>
                            <div class="col-md-6">
                                <span><h6>Answered</h6></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 ">
                                <h4 style="background-color: red;"></h4>
                            </div>
                            <div class="col-md-6">
                                <span><h6>Not Answered</h6></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 ">
                                <h4 style="background-color: #9f9999;"></h4>
                            </div>
                            <div class="col-md-6">
                                <span><h6>Not Attempted</h6></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 ">
                                <h4 style="background-color: blue"></h4>
                            </div>
                            <div class="col-md-6">
                                <span><h6>Active</h6></span>
                            </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div> <!-- End Course Item-->

              </div>

            </div>
        </section>



        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ url('frontassets/vendor/aos/aos.js') }}"></script>
        <script src="{{ url('frontassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('frontassets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ url('frontassets/vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ url('frontassets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ url('frontassets/js/main.js') }}"></script>
    </body>
</html>
