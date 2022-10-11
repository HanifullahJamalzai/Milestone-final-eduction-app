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
        
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Current Trainer</h5>

              <!-- General Form Elements -->

              <form action="{{ route('trainer.update', ['trainer' => $trainer]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $trainer->name }}">
                    @error('name')
                      <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" name="category" class="form-control" value="{{ $trainer->category }}">
                    @error('category')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Biography</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="bio" rows="6" class="form-control">{{ $trainer->bio }}</textarea>
                    @error('bio')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Facebook Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="fb_link" class="form-control" value="{{ $trainer->fb_link }}">
                      @error('fb_link')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Instagram Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="instagram_link" class="form-control" value="{{ $trainer->instagram_link }}">
                      @error('instagram_link')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Linkedin Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="linkedin_link" class="form-control" value="{{ $trainer->linkedin_link }}">
                      @error('linkedin_link')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Twitter Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="twitter_link" class="form-control" value="{{ $trainer->twitter_link }}">
                      @error('twitter_link')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" name="category" class="form-control" value="{{ $trainer->category }}">
                      @error('category')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                      <input type="file" name="photo" class="form-control">
                      @error('photo')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>


    </div>
  </section>


@endsection
