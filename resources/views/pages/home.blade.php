@extends('layouts.main')

<!-- section is one section -->
@section('title') 
    Design Storm - Inspiration for Developers
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Design Storm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @guest
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
        @else
          <a href="/dashboard">{{auth()->user()->name}}</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          </li>
        </ul>
        @endguest
    </div>
  </div>
</nav>

@endsection

@section('content')
            <div class="container pl-5 mx-auto" style="width: 200px;">
                <div class="column">
                    <h1>DesignStorm</h1>
                    <div id="home">
                        <div class="search-area">
                            <div class="search-container"> 
                                <input class="search" type="text" value="" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('button')
    <div class="container border border-primary mt-5">
    <div class="row">
        <div class="col-12 border border-secondary bg-dark text-light">.col-9</div>
        <div class="col-6 border border-sucess bg-warning text-dark">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
        <div class="col-6 border border-info bg-warning text-dark">.col-6<br>Subsequent columns continue along the new line.</div>
    </div>
    </div>
@endsection