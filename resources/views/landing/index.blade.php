@extends('landing.layouts.index')

@section('content')




  <!-- ======= Landing Title Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ $landingTitle->title }}</h1>
      <h2>{{ $landingTitle->description }}</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Landing Title -->

  <main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ $hero->photo }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{ $hero->title }}</h3>
            <p>
              {!! $hero->description !!}
            </p>

          </div>
        </div>

      </div>
    </section><!-- End Hero Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Mentor?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                @foreach ($wcm as $item)
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="{{ $item->icon }}"></i>
                      <h4>{{ $item->title }}</h4>
                      <p>{{ $item->description }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          @foreach ($courses as $item)

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ $item->photo }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>{{ $item->title }}</h4>
                    <p class="price">{{ $item->price }}$</p>
                  </div>

                  <h3><a href="course-details.html">{{ $item->title }}</a></h3>
                  <p>{{ Str::limit($item->description, 100, '...')  }}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="{{ asset('landing_assets/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                      <span>{{ $item->trainer_id }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->

          @endforeach
          
        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($trainers as $item)
              
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ $item->photo }}" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>{{ $item->name }}</h4>
                  <span>{{ $item->category }}</span>
                  <p>
                    {{ $item->bio }}
                  </p>
                  <div class="social">
                    <a href="{{ $item->fb_link }}"><i class="bi bi-twitter"></i></a>
                    <a href="{{ $item->twitter_link }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $item->instagram_link }}"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $item->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          
          @endforeach

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->





@endsection