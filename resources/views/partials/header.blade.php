
<header>

    <ul class="nav nav-tabs pt-3 px-5">
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
        </li>
    </ul>

</header>
