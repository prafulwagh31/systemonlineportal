<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rishi Prasad Gyan Pratiyogita - AboutUs</title>
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
<style type="text/css">
  hr.hr-5 {
  border: 0;
  border-top: 7px double #000a15;
  width: 18%;
    margin-left: 41%;
}
</style>

<body>
  <!-- ======= Header ======= -->
  @include('Front.header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style="margin-top: 80px;">
      <div class="container">
        <h2>About Us</h2>
        <hr class="hr-5">
        <p>Useful information for the participants of the RPGP competition</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
          <p>
            Rishi Prasad Gyan Pratiyogita is a quarterly (i.e., every three months) online
            competition. The registration is absolutely free (no hidden charges). The content
            of the competition is based on the monthly spiritual magazine Rishi Prasad,
            conducted in 8 different languages. Readers of Rishi Prasad from all age groups
            can participate in 8 different languages. The aim of this competition is to
            increase essential knowledge required in our everyday life. Not only you can
            increase your knowledge through this competition in a fun way, but you can also
            win attractive prizes as well. The top 3 candidates of each age group will be
            awarded attractive prizes, moreover, there are 11 more consolation prizes. So,
            what are you waiting for? Register now!
          </p>
          <p>
            The question will be only from the Rishi Prasad of the previous three months.
            For example, if you want to participate on 2nd Jan 2022, you need to read the
            issues of October, November and December to be prepared.
          </p>
          <p>
            To obtain Rishi Prasad in hard copy or as an e-magazine (Android user, and
            iPhone user) visit https://rishiprasad.org/. Readers of Rishi Prasad from all age
            groups can participate in this online event absolutely free of charge. Free
            registration is mandatory for every interested individual.
          </p>
        <a href="{{route('instruction')}}">Next</a>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Front.footer')
  <!-- End Footer -->

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
