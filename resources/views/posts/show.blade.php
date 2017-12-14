@extends('layouts')

@section('content')

<div class="col-sm-8 blog-main">

  <h2>{{ $post->title}}</h2>

  <p>{{ $post->body}}</p><hr>

  <div class="comments">

    <ul class="list-group">

      @foreach( $post->comments as $comment)

      <small class="text-muted">

        <strong class="text-brand-primary">

          {{$comment->user->name}}:

        </strong>

      </small>

      <li class="list-group-item d-flex">

        <span class="d-inline-block w-50">{{ $comment->body }}</span>

        <small class="w-25 text-info">

          {{ $comment->created_at->diffForHumans() }}: &nbsp;

        </small>

        @if(auth()->check() && auth()->user()->id === $comment->user_id)

        <span class="float-right d-flex">

          <a href="/posts/{{$post->id}}/comments/{{$comment->id}}/edit" class="btn text-brand-primary"><small>Edit</small></a>&nbsp;

          <form method="POST" action="/posts/{{$post->id}}/comments/{{$comment->id}}/delete">

            {{ csrf_field() }}

            {{ method_field('DELETE') }}

            <input type="hidden" name="post_id" value="{{$post->id}}">

            <button class="btn text-danger btn-link">Delete</button>

          </form>

        </span>

        @endif

      </li>

      @endforeach

    </ul>  
    
  </div>

  <hr>

  @if(Auth::check())

  <div class="card">

    <div class="card-block p-1">

      <form method="POST" action="/posts/{{$post->id}}/comments">

        {{ csrf_field() }}

        <div class="form-group">

          <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>

        </div>

        <div class="form-group">

          <button type="submit" class="btn btn-primary">Add Comment</button>

        </div>

      </form>

      @include('layouts.errors')

    </div>

  </div>

  @else

  <span>

    <a href="/login">Login</a> or <a href="/register">signup</a> to comment

  </span>

  @endif

</div>

@endsection


