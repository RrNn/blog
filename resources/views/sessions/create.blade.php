@extends('layouts')

@section('content')

<div class="col-sm-8">
  <h2>Sign In</h2>
  <form method="POST" action="/login">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email:</label>
      <input class="form-control" id="email" name="email" type="text"></input>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input class="form-control" id="password" name="password" type="password"></input>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">Sign In</button>
    </div>

  </form>
</div>


@endsection