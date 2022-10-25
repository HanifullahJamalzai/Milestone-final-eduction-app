@extends('landing.layouts.index')

@section('content')





<main id="main" data-aos="fade-in" class="aos-init aos-animate">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Course Detail</h2>
        {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="course-details" class="course-details">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-8">
              <img src="{{ $course->photo }}" class="img-fluid" alt="">
              <h3>{{ $course->title }}</h3>
              <p>
                {!! $course->description !!}
              </p>
            </div>
            <div class="col-lg-4">
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Trainer</h5>
                <p><a href="#">{{ $course->trainer->name }}</a></p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Course Fee</h5>
                <p>${{ $course->price }}</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Available Seats</h5>
                <p>{{ $course->available_seat }}</p>
              </div>
  
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Schedule</h5>
                <p>{{ $course->schedule }}</p>
              </div>
  
            </div>
          </div>
  
        </div>
      </section>
  </main>





@endsection