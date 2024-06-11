<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <div>
        <img class="mb-4" src="{!! url('images/crud.png') !!}" alt="" width="120" height="80">
        </div>
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Lgog"><use xlink:href="#bootstrap"/></svg>
      </a>

        <!-- <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li> -->



      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <!-- <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
        @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
        @endguest
        @auth
        <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div> 
        <li class="nav-link px-2 text-white">
        You logged in as: {{auth()->user()->username}}&nbsp;
        </li>
        @endauth
      </ul>
    </div>
  </div>
</header>