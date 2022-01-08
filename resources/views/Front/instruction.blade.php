<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rishi Prasad Gyan Pratiyogita Exam Portal</title>
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
</head>
<style type="text/css">
    .tests
    {
        background-color: #dd137b;
        padding: 5px;
    }
</style>
<body>
    @include('Front.header')
     @php
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

        $exam = \App\Models\Exam::where(['agegroup' => $agegroup,'language' => $language])->first();

    @endphp
    <section>
   <div class="container">
      <div  class="panel panel-default instruction_tech LeftPanel">
         <div class="leftMid" >
            <div class="panel-body" style="margin-top: 50px;">
               <div>
                  <div class="tests">
                      <p class="text-center"><strong>Online Test</strong></p>
                      <p class="text-center"><strong>Rishi Prasad Gyan Pratiyogita : 2022</strong></p>
                      <p> </p>
                      <p style="margin-left: 59px;"><em>Duration</em>: <strong>{{ $exam?->duration}} minutes</strong>
                         <em> <span class="pull-right" style="float: right;margin-right: 59px;"><a href="{{ route('exam-preview') }}" class="btn btn-primary">Back</a> </em>
                      </p>
                  </div>
                  <p class="text-center"><strong>Read the following instructions carefully.</strong></p>
                  <p> </p>
                    <?php echo $exam->instruction; ?>
               </div>
            </div>
         </div>
         <div class="next" style="text-align: center;">

            @if(!is_null($exam))
             @php
                    $question = \App\Models\Question::whereExam($exam->id)->first();
                    $encodeQuestion = base64_encode($question?->serial);
             @endphp
            @endif

            @if(!is_null($question))
            <a href="{{ route('startQuiz') }}" class="get-started-btn">Next</a>
            @else
            <span style="color:red"><b>Exam not found with this langauge and agegroup.</b></span>
            @endif

         </div>
      </div>
   </div>
</section>
</body>
</html>
