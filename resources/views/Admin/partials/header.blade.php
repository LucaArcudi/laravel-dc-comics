<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                Admin
            </span>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (str_starts_with(Route::currentRouteName(), 'admin.home')) ? 'active' : '' }}" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (str_starts_with(Route::currentRouteName(), 'admin.comics')) ? 'active' : '' }}" href="{{ route('admin.comics.index') }}">Comics</a>
                    </li>
                </ul>
            </div>
            @dump(Route::currentRouteName())
        </div>
    </nav>
</header>

