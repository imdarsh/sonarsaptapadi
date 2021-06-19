<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        Sonarsaptapadi
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/connection">Connection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/matches">Matches</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Notifications -->
      <a
        class="text-reset me-3 dropdown-toggle hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <i class="fas fa-bell"></i>
        <span class="badge rounded-pill badge-notification bg-danger">1</span>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="#">Some news</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Another news</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">Something else here</a>
        </li>
      </ul>

      <!-- Avatar -->
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://mdbootstrap.com/img/new/avatars/2.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li><a class="dropdown-item" href="/profile">My profile</a></li>
        <li><a class="dropdown-item" href="/connections">Connection</a></li>
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
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!--Navbar-->
<!-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">

  <div class="container">

    <a class="navbar-brand py-0" href="#"><i class="fab fa-3x fa-mdb"></i></a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="basicExampleNav">


      <ul class="navbar-nav mr-auto text-uppercase font-weight-normal">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
      </ul>

      
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

  </div>
</nav> -->
