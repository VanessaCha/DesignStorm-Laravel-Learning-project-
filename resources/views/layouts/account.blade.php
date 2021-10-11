<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  
  </head>
  <body>
    <div id="admin-section">
      <div id="sidemenu">
        <div class="logo"> </div>
        <nav><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a><a class="active" href="admin/dashboard.html"> <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></nav>
      </div>
      <div id="content-area">
        @yield('content')
      </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
