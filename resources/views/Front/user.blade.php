<!DOCTYPE html>
<html lang="en">
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
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Template Main CSS File -->
      <link href="{{ url('frontassets/css/style.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- =======================================================
         * Template Name: Mentor - v4.3.0
         * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <style type="text/css">
      .service-card {
    margin-bottom: 30px;
    background: #000a15;
    text-align: center;
    padding: 60px 30px 50px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 45px 0px rgb(0 0 0 / 15%);
    box-shadow: 0px 0px 45px 0px rgb(0 0 0 / 15%);
    position: relative;
    z-index: 1;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}
.service-card span {
    position: absolute;
    top: 15px;
    left: 15px;
    font-size: 80px;
    line-height: 80px;
    color: var(--service-icon);
}
.service-card i {
    color: #ffff;
    font-size: 50px;
    line-height: 50px;
    display: inline-block;
    margin-bottom: 18px;
}
.service-card h4 {
    color: #ffff;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 35px;
    transition: all linear .3s;
    /* -webkit-transition: all linear .3s; */
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s;
}
.service-card a {
    font-weight: 500;
    padding: 6px 20px;
    border-radius: 8px;
    color: var(--primary);
    background: var(--white);
    text-transform: capitalize;
}
   </style>
   <body>
      <!-- ======= Header ======= -->
      @include('Front.header')
      <!-- End Header -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-6">
                  <div class="service-card">
                     <i class="fas fa-user-circle"></i>
                     <h4>User Profile</h4>
                     <button class="btn btn-secondary" style="background: #dd137b;"><a href="{{ route('profile') }}">Click</a></button>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6">
                  <div class="service-card service-ghape">
                     <i class="fas fa-file-alt"></i>
                     <h4>Start Exam</h4>  
                     <button class="btn btn-secondary" style="background: #dd137b;"><a href="{{ route('instruction') }}">Start</a></button>
                  </div>
               </div>
            </div>
         </div>
      </section>
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
