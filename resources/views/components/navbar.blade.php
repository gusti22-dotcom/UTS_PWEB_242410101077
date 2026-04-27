<nav class="navbar navbar-dark">
  <div class="container d-flex justify-content-between">

    <div class="d-flex align-items-center">
      <img src="{{ asset('images/logo.png') }}"
           alt="Logo"
           width="35" height="35"
           class="me-2"
           style="object-fit: contain;">

      <span class="navbar-brand fw-bold text-white m-0">
        Inventaris Pribadi
      </span>
    </div>

    <div>
      @if(isset($username) && $username != '')
        <a href="/dashboard?username={{ $username }}" class="btn btn-dark btn-sm me-2">
          Dashboard
        </a>

        <a href="/profile?username={{ $username }}" class="btn btn-light btn-sm me-2">
          Profile
        </a>

        <a href="/pengelolaan?username={{ $username }}" class="btn btn-warning btn-sm me-2">
          Pengelolaan
        </a>

        <a href="/" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin logout?')">
          Logout
        </a>
      @else
        <a href="/" class="btn btn-light btn-sm">
          Login
        </a>
      @endif
    </div>

  </div>
</nav>
