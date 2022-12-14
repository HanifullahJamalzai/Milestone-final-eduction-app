@extends('admin.layouts.index')

@section('content')
@include('common.alert')

  <div class="pagetitle">
    <h1>Blank Page</h1>
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

      @foreach ($courses as $item)
        <div class="col-lg-6">
              
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p>{{ $item->description }}</p>
            </div>
          </div>

          <form action="
            @if (isset($isComment) AND $isComment->course_id == $item->id)
                  {{ route('comment.update', ['comment' => $isComment->id]) }}
              @else
                {{ route('storeComment', ['courseId' => $item->id]) }}
              @endif" 
            method="post" class="w-100">
            @if(isset($isComment)) @method('PUT') @else @method('POST') @endif
            @csrf
            
            <input type="text" name="comment_description" class="w-75" placeholder="Comment" value=" @if(isset($isComment) AND $isComment->course_id == $item->id) {{ $isComment->comment_description }} @else {{ old('comment_description') }} @endif">
            <button type="submit" class="btn btn-primary btn-sm"> 
            @if(isset($isComment) AND $isComment->course_id == $item->id) Update @else Submit @endif</button>
          </form>
          <hr>
          
          @foreach ($item->comments as $comment)

            <div class="">
              <p class="">{{ $comment->user->name }}</p>
              <p class="">{{$comment->comment_description}} 

                @can('delete', $comment)
                  <a href="{{ route('comment.destroy', ['id' => $comment->id]) }}" class="btn btn-danger btn-sm">Delete</a> 
                  <a href="{{ route('comment.edit', ['comment' => $comment]) }}" class="btn btn-info btn-sm">Edit</a>
                @endcan
              </p>
            </div>

          @endforeach
      
          <hr>
        </div>
      @endforeach

    </div>
  </section>


@endsection
