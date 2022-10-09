@extends('admin.layouts.index')

@section('content')
@include('common.alert')

  <div class="pagetitle">
    <h1>WCM Page</h1>
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
              <h5 class="card-title">Edit WCM</h5>

              <!-- General Form Elements -->

              <form action="{{ route('wcm.update', ['wcm' => $wcm->id]) }}" method="POST">
                @csrf
                @method('put')
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $wcm->title }}">
                    @error('title')
                      <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Icon</label>
                  <div class="col-sm-10">
                    <input type="text" name="icon" class="form-control" value="{{ $wcm->icon }}">
                    @error('icon')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="description" rows="6" class="form-control">{{ $wcm->description }}</textarea>
                    @error('description')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Update WCM</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>


    </div>
  </section>


@endsection
