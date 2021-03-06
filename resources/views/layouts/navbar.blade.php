<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sonarsaptapadi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/wishlist">Wishlist</a>
        </li>
      </ul>
      <ul class="d-flex navbar-nav  mb-2 me-4 mb-lg-0">
      <li class="nav-item dropdown">
          
          @guest
                              @if (Route::has('login'))
                                  <li class="nav-item">
                                      <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif
                              
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                          <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="{{ auth()->user()->unreadNotifications->markAsRead() }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Notification<span class="badge badge-primary text-bold">{{ count(auth()->user()->unreadNotifications) }}</span></a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      @if(count(auth()->user()->unreadNotifications) > 0)
        @foreach(auth()->user()->unreadNotifications as $notification)
        <li><a href="" class="dropdown-item text-wrap">{{ $notification->data['note'] }}</a></li>
        @endforeach
      @else
        <li><a href="" class="dropdown-item text-wrap">You Have No New Notification</a></li>
      @endif
      </ul>
      </li>
                          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->id}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/profile">My profile</a></li>
          <li><a class="dropdown-item" href="/connections">Connection</a></li>
          <li><a class="dropdown-item" href="/wishlist">Wishlist</a></li>
          <li><a class="dropdown-item" href="/matches">Matches</a></li>
          <li><a class="dropdown-item" href="/subscription">Subscription</a></li>
          <li><a class="dropdown-item" href="/settings">Settings</a></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form> </li>
          </ul>
                          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>