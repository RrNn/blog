@if(Auth::check())

<div class="blog-masthead bg-primary-dark">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="/posts/create">New Post</a>
      <span class="nav-link ml-auto">
        <a class="right-links text-white" href="#">{{ Auth::user()->name }}</a>&nbsp;&nbsp;
        <a class="right-links text-warning" href="/logout">Logout</a>
      </span>
    </nav>
  </div>
</div>

@endif

@if(!Auth::check())

<div class="blog-masthead bg-primary-dark">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <span class="nav-link ml-auto">
        <a class="right-links text-white" href="/register">Register</a>&nbsp;
        <a class="right-links text-white" href="/login">Login</a>
      </span>
    </nav>
  </div>
</div>

@endif