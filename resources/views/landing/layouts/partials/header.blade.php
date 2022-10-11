  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ route('landing.index') }}">Home</a></li>
          <li><a href="{{ route('landing.about') }}">About</a></li>
          <li><a href="{{ route('landing.course') }}">Courses</a></li>
          {{-- <li><a href="/trainer">Trainers</a></li> --}}
          <li><a href="{{ route('landing.trainer') }}">Trainers</a></li>
          <li><a href="{{ route('landing.event') }}">Events</a></li>
          <li><a href="{{ route('landing.contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
