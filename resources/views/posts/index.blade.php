@extends('layouts')
@section('content')

<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">The Blog</h1>
    <p class="lead blog-description">A very simple blog for crating and reading posts.</p>
  </div>
</div>

<div class="col-sm-8 blog-main">

  @foreach($posts as $post)

  @include('posts.post')

  @endforeach

</div>


@endsection