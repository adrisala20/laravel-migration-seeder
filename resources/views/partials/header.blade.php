<header>
    <div  class="container">
        <div id="logo" class="text-center">
            <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo">
        </div>
        <div id="main-menu">
            <nav class="navbar-nav container navbar-light">
                <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                    <li class="nav-item">
                        <a class=" nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            href="{{route('home')}}">
                            treni
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>