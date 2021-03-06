@extends('layouts')
@section('content')


<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">The Blog</h1>
    <p class="lead blog-description">A very simple blog for crating and reading posts.</p>
  </div>
</div>

<div class="col-sm-8 blog-main">

  <form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="title" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
      <button type="submit" class="float-right btn btn-primary">Publish</button>
    </div>
    
  </form>

  @include('layouts.errors')


</div>



@endsection