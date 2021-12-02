
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
          <li class="dropdown"><a href="#"><span><i class="fa fa-user"></i>{{ Auth::user()->name}}</span></a>
            <ul>
              <li><a href="{{ route('admin.logout') }}">logout</a></li>
            </ul>
          </li>
          @else
          <li class="dropdown"><a href="#"><span>Login</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
              <li><a href="{{ route('user.login') }}">User Login</a></li>
            </ul>
          </li>
          @endif

          <li><a href="{{ route('register') }}">Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header>
