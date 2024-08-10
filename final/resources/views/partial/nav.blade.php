<!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
  <div class="container-fluid mt-2 mx-3">
    <!-- User -->
    <ul class="navbar-nav mr-3 ml-auto d-flex align-items-center">
      <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="{{ asset('/template/assets/img/theme/profile.jpeg') }}">
            </span>
            <div class="ml-2 d-none d-lg-block">
              @auth
                <span class="mb-0 text-sm font-weight-bold">{{ Auth::user()->name }}</span>
              @endauth
              @guest
                <a href="/login" class="btn btn-primary btn-xl ml-2 mb-2">Login</a>
              @endguest
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class="dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <div class="dropdown-divider"></div>

          @auth
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ni ni-user-run"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          @endauth
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navbar -->
