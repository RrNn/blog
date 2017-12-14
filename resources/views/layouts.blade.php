
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

  <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>

<body>

  @include('layouts.nav')

  <div class="container">

    <div class="row">

      @yield('content')

      @include('layouts.sidebar')

    </div>
    
  </div>




  @include('layouts.footer')
</body>
</html>
