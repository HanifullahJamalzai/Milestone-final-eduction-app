@extends('landing.layouts.index')

@section('content')





<main id="main" data-aos="fade-in" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

          @foreach ($courses as $item)
              
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ $item->photo }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{ $item->title }}</h4>
                  <p class="price">${{ $item->price }}</p>
                </div>

                <h3><a href="course-details.html">{{ $item->trainer->category }}</a></h3>
                <p>{!! $item->description !!}</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ $item->trainer->photo }}" class="img-fluid" alt="">
                    <span>{{ $item->trainer->name }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          
          @endforeach

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main>





@endsection