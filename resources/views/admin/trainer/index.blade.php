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
                <div class="d-flex" style="justify-content: space-between;">
                    <h5 class="card-title">Trainers List</h5>
                    <a href="{{ route('trainer.create') }}">
                        <i class="bi bi-plus-circle" style="font-size: 2em; cursor: pointer; margin-top: 0.4rem"></i>
                    </a>
                </div>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">photo</th>
                    <th scope="col">category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($trainers as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->name }}</td>
                            <td><img src="{{ $item->photo }}" width="100" /></td>
                            <td>{{ $item->category }}</td>

                            <td class="d-flex" style="justify-content: space-around;">
                              
                                <a class="btn btn-primary btn-sm" href="{{ route('trainer.show',['trainer' => $item]) }}">Show</a>
                                
                                <a class="btn btn-primary btn-sm" href="{{ route('trainer.edit',['trainer' => $item->id]) }}">Edit</a>
                                
                                <form action="{{ route('trainer.destroy',['trainer' => $item->id]) }}" method="post">
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

              {{ $trainers->links() }}
              
            </div>
          </div>
    </div>
  </section>


@endsection
