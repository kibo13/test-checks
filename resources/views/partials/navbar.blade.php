<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="bk-navbar navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li>
                        <button
                            class="btn-sm btn-primary bk-navbar__download"
                            data-toggle="modal"
                            data-target="#bk-form-modal">
                            Загрузить чек
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre>
                            {{ getFormatUser(Auth::user()->name) }}
                        </a>

                        <div class="p-0 dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a id="logout-btn" class="dropdown-item" style="cursor: pointer;">
                                Выйти
                            </a>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
