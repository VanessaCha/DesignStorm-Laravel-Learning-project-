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
  
    <style>
      header{
        background: url("https://image.freepik.com/free-photo/flat-lay-tropical-leaves-with-copyspace_23-2148202665.jpg");
        height: 100vh;
        width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="/">Design Storm</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-dark"></span>
          </button>
          <div class="collapse navbar-collapse text-dark" id="navbarNavDropdown">
              @guest
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="register">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="login">Login</a>
                </li>
              @else
                <a href="/dashboard">{{auth()->user()->name}}</a>
                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </ul>
              @endguest
          </div>
        </div>
      </nav>

    <div class="banner" >
      <div class="container">
        @yield('button')
        @yield('content')
        @yield('button')
      </div>
    </div>
      
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </header>
    </body>
</html>