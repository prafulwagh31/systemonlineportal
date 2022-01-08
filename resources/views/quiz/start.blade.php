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
        <style>
            .static
            {
                display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index: 9999; width: 100%; height: 100%; opacity: .75;
            }
        </style>
        @livewireStyles
    </head>
    <body>
        @include('Front.timer');
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">


              @livewire('exam-quiz', ['questions' => $questions])


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
        @livewireScripts
    </body>
</html>


{{-- <script type="text/javascript">
    function startTimer(duration, display) {
var timer = duration, minutes, seconds;
setInterval(function () {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + " :" + " " + seconds;

    if (--timer < 0) {

        // timer = duration;
        window.location.href="{{ route('userLogout') }}";
    }
  console.log(parseInt(seconds))
  window.localStorage.setItem("seconds",seconds)
  window.localStorage.setItem("minutes",minutes)
}, 1000);
}

window.onload = function () {
  sec  = parseInt(window.localStorage.getItem("seconds"))
  min = parseInt(window.localStorage.getItem("minutes"))

  if(min >= 1){
    var fiveMinutes = (parseInt(min*60)+sec);
  }else if(sec >= 3 && min == 0){
    var fiveMinutes = (parseInt(min*60)+sec);
  }else if(sec <= 2 && min == 0){
    window.location.href = " {{ route('userLogout') }}";
  }else{
    var fiveMinutes = 60 * 1;
  }


  display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};


</script> --}}
