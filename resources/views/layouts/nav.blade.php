<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="/">Design Storm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler">
          <i class="fas fa-th-list"></i>
        </span>
      </button>
    <div class="collapse navbar-collapse text-dark" id="navbarNavDropdown">
      @guest
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="text-color-1" style="font-size:  larger;" href="/">@lang('posts/create.dashboard')</a>
          </li>
                  
          <li class="nav-item">
            <a class="text-color-1" style="font-size:  larger;" href="/login">@lang('posts/create.Login')</a>
          </li>
                  
          <li class="nav-item">
            <a class="text-color-1" style="font-size:  larger;" href="/register">@lang('posts/create.SignUp')</a>
          </li>
          <li class="nav-item dropdown">
            <a class="text-color-1 dropdown-toggle" style="font-size:  larger;" href="" id="navbarDropdownMenuLink"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              {{ Config::get('languages')[App::getLocale()] }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                  <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                @endif
              @endforeach
            </div>
          </li>
      @else
        <li class="nav-item">
          <a class="text-color-1" style="font-size:  larger;" href="/posts/create">@lang('posts/create.CREATES')</a>
        </li>
                
        <li class="nav-item">
          <a class="text-color-1" style="font-size:  larger;" href="/index">@lang('posts/create.Page')</a>
        </li>

          <a class="nav-link text-dark" href="/dashboard">{{auth()->user()->name}}</a>
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
