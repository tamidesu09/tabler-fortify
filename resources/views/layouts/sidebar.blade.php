<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/home">
            <span class="align-middle">Home</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ (request()->is('home')) ? 'active':'' }}">
                <a class="sidebar-link" href="/home">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::currentRouteName() == 'profile.edit' ? 'active':'' }}">
                <a class="sidebar-link" href="{{route('profile.edit')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</nav>