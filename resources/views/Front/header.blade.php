
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="{{ route('index') }}">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{ route('index') }}" class="logo me-auto"><img src="{{ url('frontassets/img/rpgplogo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><a href="{{ route('aboutus') }}">About Us</a></li>
          <li><a href="{{ route('termcondition') }}">Terms & Condition</a></li>
          <li><a href="{{ route('faq') }}">FAQ</a></li>
          @if(\Illuminate\Support\Facades\Auth::user())
          <li class="dropdown"><a href="#"><span><i class="fa fa-user"></i> &nbsp;&nbsp;{{ Auth::user()->name}}</span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul>
              <li><a href="{{ route('user') }}"> Profile</a></li>
              <li><a href="{{ route('user.logout') }}"> logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="{{ route('user.login') }}"><span>Login</span></a></li>
          
          @endif

          <li><a href="https://www.rpgp.rishiprasad.org/" target="_blank">Registration</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header>

