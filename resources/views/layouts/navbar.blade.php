<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light grey lighten-3">

  <div class="container">

    <a class="navbar-brand py-0" href="#"><i class="fab fa-3x fa-mdb"></i></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto text-uppercase font-weight-normal">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
      </ul>
      <!-- Links -->
      
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link font-weight-normal waves-effect waves-light" href="/inbox">
            <i class="fas fa-envelope"></i>
          </a>
        </li>
        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (1).jpg" class="rounded-circle"
              alt="avatar image" style="width:30px">
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-dark"
            aria-labelledby="navbarDropdownMenuLink-55">
            <!-- <a class="dropdown-item" href="#"></a> -->
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href="/connections">Connections</a>
            <a class="dropdown-item" href="/matches">Matches</a>
            <a class="dropdown-item" href="/settings">Settings</a>
            <a class="dropdown-item" href="/subscription">Subscription</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
          </div>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
  </div>
</nav>
<!--/.Navbar-->