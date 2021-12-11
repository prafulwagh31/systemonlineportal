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
    <section>
   <div class="container">
      <div  class="panel panel-default instruction_tech LeftPanel">
         <div class="leftMid" >
            <div class="panel-body" style="margin-top: 50px;">
               <div>
                  <div class="tests">
                      <p class="text-center"><strong>Online Test</strong></p>
                      <p class="text-center"><strong>Computer Science Engineering</strong></p>
                      <p> </p>
                      <p style="margin-left: 59px;"><em>Duration</em>: <strong>30 minutes</strong>
                         <em> <span class="pull-right" style="float: right;margin-right: 59px;">Maximum Marks:<strong>10</strong></span> </em>
                      </p>
                  </div>
                  <p class="text-center"><strong>Read the following instructions carefully.</strong></p>
                  <p> </p>
                  <p>1. Kindly go through various symbols used in the test and understand their meanings before starting the examination.</p>
                  <p>2. After starting examination,you can view all the questions in the question paper,by clicking on the <strong>Question Paper</strong> button on the screen.</p>
                  <p>3. This question paper consists of <strong>only one sections</strong>.
                  </p>
                  <p>4. Depending upon the GATE paper, there may be useful common data that may be required for answering the questions.If the paper has such useful data, the same can be viewed by clicking on the <strong>Useful Data</strong> button that appears at the top, right hand side of the screen.</p>
                  <p>5. The question paper may consist of questions of <strong>Multiple Choice Questions</strong>(MCQ) and <strong>Numerical Answer Type</strong>(NAT). Multiple Choice Questions will have four choices against A,B,C,D, out of which only<strong> ONE </strong>is the correct answer.The candidate has to choose the correct answer by clicking on the radio button (o) placed before the choice. The software allows only one answer to be selected for a Multiple Choice Question with the help of a mouse. For Numerical Answer Type questions, there will not be any choices<strong>. For the NAT questions, the answer should be entered </strong>with the help of the mouse and the numeric key pad that appears on the screen.</p>
                  <p>6. Your answers shall be updated and saved on a server periodically and also at the end of the examination.The examination will <strong>stop automatically</strong> at the end of <strong>30 minutes</strong>. A candidate is not allowed to leave the examination hall till the completion of the examination.</p>
                  <p>7. All questions that are not attempted will result in zero marks. However,wrong answers for Multiple Choice Questions (MCQ) will result in <strong>NEGATIVE</strong> marks. For Multiple Choice Questions, a wrong answer will result in deduction of <strong><em>⅓</em></strong> marks for a 1-mark question and <strong><em>⅔ </em></strong>marks for a 2- mark question.There is no negative marking for questions of Numerical Answer Type (NAT).</p>
                  <p>8. Charts, graph sheets, calculators and mathematical tables are <strong>NOT</strong> allowed in the examination hall.You must use the scribble pad provided to you at the examination centre for all your rough work. The scribble pad has to be returned at the end of the examination.</p>
                  <p> </p>
                  <hr>
                  <p><strong>Declaration by the candidate:</strong></p>
                  <p><input type="checkbox" name="checkboxes"> &nbsp;“I have read and understood all the above instructions. I have also read and understood clearly the instructions given on the admit card and shall follow the same.I also understand that in case I am found to violate any of these instructions, my candidature is liable to be cancelled. I also confirm that at the start of the examination all the computer hardware allotted to me are in proper working condition”.</p>
                  <p> </p>
               </div>
            </div>
         </div>
         <div class="next" style="text-align: center;">
            @php
                $question = \App\Models\Question::whereExam(2)->first();
            @endphp
            <a href="{{route('exam', ['id' => $question->id])}}" class="get-started-btn">Next</a>
         </div>
      </div>
   </div>
</section>
</body>
</html>
