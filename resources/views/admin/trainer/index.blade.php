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
      <form class="search-form d-flex align-items-center" method="POST" action="{{ route('trainer.search') }}">
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
                                @can('delete', $item)
                                  <x-delete-btn-component route="trainer.destroy" routeKey="trainer" :keyValue="$item['id']" />
                                @endcan
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
