@extends('admin.layouts.index')

@section('content')
@include('common.alert')

  <div class="pagetitle">
    <h1>Course Page</h1>
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
              <h5 class="card-title">Course Form</h5>

              <!-- General Form Elements -->

              <form action="{{ route('course.update', ['course' => $course->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Trainer</label>
                  <div class="col-sm-10">
                    <select name="trainer" class="form-control" id="">
                        @foreach ($trainers as $item)
                            <option value="{{ $item->id }}" @if($course->trainer_id == $item->id) @selected(true) @endif >{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('trainer')
                      <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $course->title }}">
                    @error('title')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" class="tinymce-editor">{{ $course->description }}</textarea>
                    @error('description')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" class="form-control" value="{{ $course->price }}">
                      @error('price')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Available seat</label>
                    <div class="col-sm-10">
                      <input type="number" name="available_seat" class="form-control" value="{{ $course->available_seat }}">
                      @error('available_seat')
                          <span class="text-danger"> {{ $message }} </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Schedule</label>
                    <div class="col-sm-10">
                        <input type="text" name="schedule" class="form-control" value="{{ $course->schedule }}">
                        @error('schedule')
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
