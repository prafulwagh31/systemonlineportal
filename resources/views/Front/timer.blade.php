<header id="header" class="fixed-top">
    <div class="container align-items-center">
        <div class="row">
            <div class="col-md-10"><h1 class="logo me-auto"><a href="#">Online Test</a></h1>
                <i class="bi bi-list mobile-nav-toggle"></i></div>
            <div class="col-md-2" style="border-radius: 27%;border: 1px solid;background-color: #dd137b;color: #fff;">
                <center>Time Left</center>
                <div id="time" style="text-align: center;"></div>
            </div>
        </div>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            {{-- <nav id="navbar" class="navbar order-last order-lg-0">
              <h1 class="logo me-auto"><a href="#"><center>Online Test</center></a></h1>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>


            <div id="time" style="float:right;">

            </div> --}}

     <!-- .navbar -->


</header>
@php

$duration = 1;
@endphp
<script type="text/javascript">
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
    var fiveMinutes = 60 * {{ $duration }};
  }

  //  if(min <= 1){
  //   var fiveMinutes = (parseInt(min*60)+sec);
  // }else if(sec <= 3 && min == 0){
  //   window.location.href = " {{ route('userLogout') }}";
  // }else{
  //   var fiveMinutes = 60 * {{ $duration }};
  // }
   
  display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};


</script>
