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
                <div class="d-flex" style="justify-content: space-between;">
                    <h5 class="card-title">WCM List</h5>
                    <a href="{{ route('wcm.create') }}">
                        <i class="bi bi-plus-circle" style="font-size: 2em; cursor: pointer; margin-top: 0.4rem"></i>
                    </a>
                </div>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">icon</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($wcms as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->description }}</td>
                            <td class="d-flex" style="justify-content: space-around;">
                              
                              <form action="{{ route('wcm.delete',['wcm' => $item->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                              </form>

                              <a class="btn btn-primary btn-sm" href="{{ route('wcm.edit',['wcm' => $item->id]) }}">Edit</a>

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

            </div>
          </div>
    </div>
  </section>


@endsection
