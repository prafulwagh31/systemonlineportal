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
{{-- <script type="text/javascript">
    function startTimer(duration, display) {
var timer = duration, minutes, seconds;
setInterval(function () {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + " :" + " " + seconds;

    if (--timer > 0) {

        alert('time out');

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




</script> --}}

<div id="divCounter"></div>
<script type="text/javascript">
if (sessionStorage.getItem("counter")) {
  if (sessionStorage.getItem("counter") >= 10) {
    var value = 0;
  } else {
    var value = sessionStorage.getItem("counter");
  }
} else {
  var value = 0;
}
document.getElementById('divCounter').innerHTML = value;

var counter = function () {
  if (value >= 10) {
    sessionStorage.setItem("counter", 0);
    value = 0;
  } else {
    value = parseInt(value) + 1;
    sessionStorage.setItem("counter", value);
  }
  document.getElementById('divCounter').innerHTML = value;
};

var interval = setInterval(counter, 1000);
</script>

{{-- <script type="text/javascript">
    var timeoutHandle;
    function countdown(minutes) {
        var seconds = 60;
        var mins = minutes
        function tick() {
            var counter = document.getElementById("time");
            var current_minutes = mins-1
            seconds--;
            counter.innerHTML =
            current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
            if( seconds > 0 ) {
                timeoutHandle=setTimeout(tick, 1000);
            } else {
                if(mins > 1){
                   // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                   setTimeout(function () { countdown(mins - 1); }, 1000);
                }
            }
        }
        tick();
    }
    countdown('{{ $duration}}');
</script>

    <!-- script for disable url -->
<script type="text/javascript">
    var time= '{{ $duration}}';
    var realtime = time*60000;
    setTimeout(function () {
        alert('Time Out');
        window.onload = function() {
            Livewire.on('TimeOut', () => {
            // Code Here
            });
        }

    },
    realtime);

</script> --}}
