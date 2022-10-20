@extends('landing.layouts.index')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">
          @foreach ($events as $item)
              
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ $item->photo }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                <p class="fst-italic text-center">{{ $item->starting_date }}</p>
                <p class="card-text">{{ $item->description }}</p>
              </div>
            </div>
          </div>
          
          @endforeach

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main>
@endsection