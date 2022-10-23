  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ route('landing.index') }}">@lang('navigation.home')</a></li>
          <li><a href="{{ route('landing.about') }}">{{ __('navigation.about')  }}</a></li>
          <li><a href="{{ route('landing.course') }}">@lang('navigation.courses')</a></li>
          {{-- <li><a href="/trainer">Trainers</a></li> --}}
          <li><a href="{{ route('landing.trainer') }}">@lang('navigation.trainers')</a></li>
          <li><a href="{{ route('landing.event') }}">@lang('navigation.events')</a></li>
          <li><a href="{{ route('landing.contact') }}">@lang('navigation.contact')</a></li>

          <a href="{{ route('language', ['language' => 'en']) }}" class="btn btn-danger" style=" border:  {{ app()->getLocale() == 'en' ? "4px solid blue" : null }}">EN</a>
          <a href="{{ route('language', ['language' => 'fr']) }}" class="btn btn-dark" style=" border:  {{ app()->getLocale() == 'fr' ? "4px solid blue" : null }}">FR</a>
          <a href="{{ route('language', ['language' => 'pa']) }}" class="btn btn-success" style=" border:  {{ app()->getLocale() == 'pa' ? "4px solid blue" : null }}">PA</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
