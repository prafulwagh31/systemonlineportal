<html>
    <title>Review</title>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Exam System</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ url('frontassets/img/favicon.png') }}" rel="icon">
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
                <h2></h2>
                <p>Review</p>
              </div>
                <form action="{{ route('final') }}" method="POST">
                    @csrf
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                        @foreach($results as $result)
                        <div class="col-lg-6 col-md-6 ">

                        <div class="course-item">

                            <div class="course-content">
                            <h3><a href="#">{{ strip_tags($result->question) }}</a></h3>
                            <div class="trainer-profile ">

                                <div class="col-lg-12"><p ><input type="checkbox" disabled name="answer" id="answer" value="{{ $result->answer_id}}" checked> &nbsp;&nbsp;&nbsp;&nbsp;{{ strip_tags($result->answer) }}</p></div>

                            </div>
                            <input type="hidden" name="user_id" value="1">

                            <div class="trainer d-flex justify-content-between align-items-center">


                            </div>
                            </div>

                        </div>

                        </div>
                        @endforeach



                        <!-- End Course Item-->

                    </div>
                    <button type="submit" class="btn btn-primary " style="margin-top:20px;float:right">Next</button>
                </form>

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
