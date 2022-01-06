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
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 2.25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
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
        <h2>Exam Details</h2>
        <hr class="hr-5">
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="main-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body mt-3">

                  <form method="POST" action="{{ route('instruction') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <div class="col-sm-2 mt-2">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-4 text-secondary">
                        <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" value="{{ $profile->name }}" disabled>
                      </div>

                      <div class="col-sm-2 mt-2">
                        <h6 class="mb-0">Mobile</h6>
                      </div>
                      <div class="col-sm-4 text-secondary">
                        <input type="mobile" class="form-control" name="mobile" placeholder="+91-9999999999" value="{{ $profile->mobile }}" disabled>
                      </div>
                    </div>
                    <!-- <div class="row mb-3">
                      <div class="col-sm-2 mt-2">
                        <h6 class="mb-0">Mobile</h6>
                      </div>
                      <div class="col-sm-4 text-secondary">
                        <input type="mobile" class="form-control" name="mobile" placeholder="+91-9999999999" value="{{ $profile->mobile }}" disabled>
                      </div>

                      <div class="col-sm-2 mt-2">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-4 text-secondary">
                        <input type="text" class="form-control" name="address" placeholder="e.g. 123,Street, India" value="{{ $profile->address }}" disabled>
                      </div>
                    </div> -->
                    <div class="row mb-3">
                        <div class="col-sm-2 mt-2">
                          <h6 class="mb-0">Age Group</h6>
                        </div>
                        <div class="col-sm-4 text-secondary">
                          <select name="agegroup" id="agegroup" class="form-control" disabled>
                            <option value=""> </option>
                            <option value="Under 12 years" @if($profile->age <= 12) selected @endif>Under 12 years</option>
                            <option value="13 to 17 years" @if($profile->age >= 13 && $profile->age <= 17) selected @endif >13 to 17 years</option>
                            <option value="18 to 30 years" @if($profile->age >= 18 && $profile->age <= 30) selected @endif>18 to 30 years</option>
                            <option value="Above 30 years" @if($profile->age >= 30) selected @endif>Above 30 years</option>
                          </select>
                        </div>
                        <div class="col-sm-2 mt-2">
                            <h6 class="mb-0">Language</h6>
                          </div>
                          <div class="col-sm-2 text-secondary">
                            <input type="radio" name="language" value="Hindi"> Hindi
                            <br>
                            <input type="radio" name="language" value="Gujarati"> Gujarati
                            <br>
                            <input type="radio" name="language" value="Kannada"> Kannada
                            <br>
                            <input type="radio" name="language" value="Oriya"> Oriya
                            <br>
                            <span style="color:red;">{{ $errors->first('language') }}</span>
                          </div>
                          <div class="col-sm-2 text-secondary">
                            
                            <input type="radio" name="language" value="Marathi"> Marathi
                            <br>
                            
                            <input type="radio" name="language" value="English"> English
                             <br>
                            
                            <input type="radio" name="language" value="Telugu"> Telugu
                             <br>
                            
                            <input type="radio" name="language" value="Bengali"> Bengali

                            
                          
                          </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-6"></div>
                      <div class="col-sm-6 text-secondary">
                        <button type="submit" class="btn btn-primary px-4" style="background: #dd137b;border-color:#dd137b;">Next</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">

    $( document ).ready(function() {
     
      window.localStorage.clear();
    });
    
  </script>
</body>

</html>
