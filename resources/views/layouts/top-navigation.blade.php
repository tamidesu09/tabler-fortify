<!-- Combined Navbar with Centered Links -->
<header class="navbar navbar-expand-lg py-4 bg-light shadow-lg" style="position: fixed; top: 0; width: 100%; z-index: 1000; background-color: #163673">
  <div class="container-xl">
    <a class="navbar-brand text-primary" href="{{ route('home') }}">i-Bear True Solutions Inc.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-menu">
      <!-- Centered navigation links -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item {{ request()->routeIs('careers') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('careers') }}">Careers</a>
        </li>
        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
        </li>
      </ul>

      <!-- Right-side user-related elements -->
      <div class="navbar-nav flex-row order-md-last">
        <div class="d-none d-md-flex">
          @guest
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @endif
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>{{ auth()->user()->name }}</div>
                  <div class="mt-1 small text-muted">{{ auth()->user()->email }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Status</a>
                <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </div>
            </div>
          @endguest
        </div>
      </div>
    </div>
  </div>
</header>
