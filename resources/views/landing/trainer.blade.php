@extends('landing.layouts.index')

@section('content')

 
<main id="main" data-aos="fade-in" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
          
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
                  <a href="{{ $item->twitter_link }}"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $item->fb_link }}"><i class="bi bi-facebook"></i></a>
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

  </main>




@endsection