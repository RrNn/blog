@extends('layouts')


@section('content')

<div class="col-sm-8 blog-main">
      
      <div class="card bg-header-editing-mode mb-4 border-0">
        <div class="card-header text-center text-white">
          Post for which the comment is being edited
        </div>
        <div class="card-body bg-body-editing-mode">
          {{$post->body}}
        </div>
        
      </div>

      <form method="POST" action="/posts/{{$post->id}}/comments/{{$comment->id}}/edit">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">

          <textarea name="body" placeholder="Your comment here." class="form-control">{{$comment->body}}</textarea>

        </div>

        <div class="form-group">

          <button type="submit" class="btn btn-primary">Edit Comment</button>

        </div>

        @include('layouts.errors')

      </form>

</div>

@endsection