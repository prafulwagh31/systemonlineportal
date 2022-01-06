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

  
</head>
<style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #194077;
  background: linear-gradient(to right, #194077, #194077);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 65%;
  border-radius: 5rem;
  /* letter-spacing: .1rem; */
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

</style>
<body>

  <!-- ======= Header ======= -->
  @include('Front.header')
  <!-- End Header -->

<div class="container" style="padding-top: 60px;">
   
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
          @endif
          @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
          @endif
          <div class="card-body">
            <h5 class="card-title text-center">Forgot Password</h5>
            <form class="form-signin" method="POST" action="{{ route('user.forgetPasswordLink') }}">
            {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" id="inputMobile" class="form-control" name="mobile" placeholder="Enter mobile">
                <label for="inputMobile">Mobile</label>
                <span style="color:red;">{{ $errors->first('mobile') }}</span>
              </div>

             
               <div class="form-inline flex">
                 <p>  <a href="{{ route('user.login') }}"  style="color:#dd137b;float:left;margin-left: 20px;">Login</a></p>
              <button class="btn btn-lg btn-primary btn-block text-uppercase ml-2" type="submit" style="margin-right: 3px;background-color:#dd137b;border-color:#dd137b;float:right;">Submit</button>
              </div>
            
              <br><br>
              <div class="custom-control  mt-3" style="margin-left: 14px;">
             
              
              </div>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
    
</div>

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
