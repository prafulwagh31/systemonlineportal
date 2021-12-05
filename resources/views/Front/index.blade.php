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
      <!-- =======================================================
         * Template Name: Mentor - v4.3.0
         * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      @include('Front.header')
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex justify-content-center align-items-center">
         <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <a href="courses.html" class="btn-get-started">Get Started</a>
            <h2>Rishi Prasad: A priceless treasure for your library</h2>
         </div>
      </section>
      <!-- End Hero -->
      <main id="main">
         <!-- ======= About Section ======= -->
         <section id="about" class="about">
            <div class="container" data-aos="fade-up">
               <div class="row">
                  <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                     <img src="{{ url('frontassets/img/slider/1.jpg') }}" class="img-fluid" alt="" style="height: 450px;width: 70%;margin-left: 80px;border-radius: 17px;">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                     <h3>Rishi Prasad: A priceless treasure for your library</h3>
                     <p>
                        Started in 1990, Rishi Prasad has now become the largest circulated spiritual monthly publication in the world with more than 10 million readers. The magazine is a digest of all thought provoking latest & former discourses of Sant Asharamji Bapu on various subjects directing simple solutions for a peaceful life.
                     </p>
                     <p>
                        The magazine also features news on happenings at various ashrams in past month, inspirational texts from scriptures/legends, practical tips for healthy day-to-day living balancing materialism by idealism, Bapuji's answers to questions raised by seekers, disciples's experiences etc.
                     </p>
                     <p>
                        The mission of this launch is to give a flexible and anytime access of a magazine which unbundles the secret of how to live a good life in a world full of stress, fear , despair and anxiety. Reading even a single page will give a new insight to approach life with a right attitude.
                     </p>
                  </div>
               </div>
               <button class="btn btn-primary"><a href="{{route('instruction')}}">Next</a></button>
            </div>
         </section>
         <!-- End About Section -->
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
         </section>
         <!-- End Counts Section -->
         <!-- ======= Why Us Section ======= -->
         <section class="pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <h3 class="mb-3">RISHIPRASAD</h3>
                  </div>
                  <div class="col-6" style="text-align: end;">
                     <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="background: #dd137b;border-color: #dd137b;">
                     <i class="bi bi-arrow-left-square"></i>
                     </a>
                     <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next" style="background: #dd137b;border-color: #dd137b;">
                     <i class="bi bi-arrow-right-square"></i>
                     </a>
                  </div>
                  <div class="col-12">
                     <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="row">
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/1st-December-2021.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/27th-November-2021.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/30th-November-2021.jpg') }}">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/bathua.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/bhakti.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/kartikmaas2019.jpg') }}">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/malish.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/ramkrishnaparamhansa.jpg') }}">
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="card">
                                       <img class="img-fluid" alt="100%x280" src="{{ url('frontassets/img/slider/rishiprasad_4.jpg') }}">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Why Us Section -->

         <!-- ======= Trainers Section ======= -->
         <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
               <div class="section-title">
                  <h2>Videos</h2>
                  <p>Rishi Darshan (A high quality Video Magazine)</p>
               </div>
               <div class="row" data-aos="zoom-in" data-aos-delay="100">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                     <div class="course-item">
                        <iframe style="width:120%;" height="400" src="https://www.youtube.com/embed/k8IqVZGGFr8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                     </div>
                  </div>
                  <!-- End Course Item-->
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                     <div class="course-item">
                        <iframe style="width:120%;" height="400" src="https://www.youtube.com/embed/047kwBK7ZLw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                     </div>
                  </div>
                  <!-- End Course Item-->
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                     <div class="course-item">
                        <iframe style="width:120%;" height="400" src="https://www.youtube.com/embed/COkMXW42nDo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                     </div>
                  </div>
                  <!-- End Course Item-->
               </div>
            </div>
         </section>
         <!-- End Trainers Section -->
      </main>
      <!-- End #main -->
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
