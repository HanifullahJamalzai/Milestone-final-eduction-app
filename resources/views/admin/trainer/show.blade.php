@extends('admin.layouts.index')

@section('content')
@include('common.alert')

  <div class="pagetitle">
    <h1>Trainer Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        
        <div class="col-md-4">
            <img src="{{ $trainer->photo }}" class="img-fluid rounded-start" alt="...">
        </div>

        <div class="col-md-8">
            <!-- Default Card -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Trainer Detail</h5>
      
                    <!-- Default List group -->
                    <ul class="list-group">
                      <li class="list-group-item">Name: {{ $trainer->name }}</li>
                      <li class="list-group-item">Bio: {{ $trainer->bio }}</li>
                      <li class="list-group-item">Category: {{ $trainer->category }}</li>
                      <li class="list-group-item">Facebook Link: {{ $trainer->fb_link  }}</li>
                      <li class="list-group-item">Twitter Link: {{ $trainer->twitter_link  }}</li>
                      <li class="list-group-item">Instagram Link: {{ $trainer->instagram_link  }}</li>
                      <li class="list-group-item">Linkedin Link: {{ $trainer->linkedin_link  }}</li>
                    </ul><!-- End Default List group -->
      
                  </div>
            </div><!-- End Default Card -->
        </div>


    </div>
  </section>


@endsection
