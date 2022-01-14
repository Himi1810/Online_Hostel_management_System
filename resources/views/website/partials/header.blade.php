 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Online Hostel Managment System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li>@auth<a class="nav-link scrollto active" href="{{route('website.home')}}">Home</a>@endauth</li>
          <li>@auth<a class="nav-link scrollto" href="#about">About</a>@endauth</li>
          <li>@auth<a class="nav-link scrollto" href="{{route('website.services')}}">Services</a>@endauth</li>
          @if(auth()->user())
          <li><a class="nav-link scrollto" href="{{route('employee.registration')}}">Employee Registration</a></li>

          <li><a class="nav-link scrollto" href="{{route('user.logout')}}">Log Out</a></li>
          @else


            <li><a class="nav-link scrollto" href="{{route('user.registration')}}">Registration</a></li>
            <li><a class="nav-link scrollto" href="{{route('user.login')}}">Log In</a></li>
          @endif

          <li>@auth<a class="nav-link scrollto" href="{{route('website.pages.userprofile')}}">User Request</a>@endauth</li>

         
          <li>@auth<a class="nav-link scrollto" href="#contact">Contact</a>@endauth</li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->