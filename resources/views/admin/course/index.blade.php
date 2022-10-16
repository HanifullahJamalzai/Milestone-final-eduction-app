@extends('admin.layouts.index')

@section('content')
@include('common.alert')

  <div class="d-flex" style="justify-content: space-between;">

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

    <div class="search-bar" >
      <form class="search-form d-flex align-items-center" method="POST" action="{{ route('course.search') }}">
        @csrf
        <input type="text" style="width: 20rem;" name="search" placeholder="Search" title="Search Trainer Name here">
        <button type="submit" title="Search" style="margin: 0 0.7em;"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
  
  </div>
  

    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="d-flex" style="justify-content: space-between;">
                    <h5 class="card-title">Courses List</h5>
                    <a href="{{ route('course.create') }}">
                        <i class="bi bi-plus-circle" style="font-size: 2em; cursor: pointer; margin-top: 0.4rem"></i>
                    </a>
                </div>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Available Seat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->schedule }}</td>
                            <td>{{ $item->available_seat }}</td>

                            <td class="d-flex" style="justify-content: space-around;">
                              
                                <a class="btn btn-primary btn-sm" href="{{ route('course.show',['course' => $item]) }}">Show</a>
                                
                                <a class="btn btn-primary btn-sm" href="{{ route('course.edit',['course' => $item->id]) }}">Edit</a>
                                
                                <form action="{{ route('course.destroy',['course' => $item->id]) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <h1 class="bg-warning" style="">No Item Found!</h1>
                        </tr>
                    @endforelse
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

              {{ $courses->links() }}
              
            </div>
          </div>
    </div>
  </section>


@endsection
