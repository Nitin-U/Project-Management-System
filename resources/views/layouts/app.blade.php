<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="css/footer.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid mx-5">
                <a href="{{ '/' }}"><img src="images/logo.png" alt="" style="width: 35px"></a>

                <form class="d-flex align-items-center">
                    <div class="input-group">
                    <input class="form-control d-none d-sm-block" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark d-none d-sm-block" value="submit" id="navbar-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="{{ '/' }}"><img src="images/logo.png" alt="" style="width: 35px"></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <form class="d-flex align-items-center">
                        <div class="input-group">
                        <input class="form-control d-block d-sm-none" name="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark d-block d-sm-none" value="submit" id="navbar-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('teams.index') }}">Home</a>
                        </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('invites.invite') }}">Invite</a>
                        </li>
                        <!--li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li-->
                    </ul>
                    
                </div>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Feature</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Managers</a></li>
                            <li><a href="#">Teams</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Project Management System</h3>
                        <p>We provide you with a unified space for team collaboration, task tracking, and project management. With this platform, team members can communicate and collaborate on project tasks and deadlines, access project files and resources, and monitor progress in real-time. The use of a centralized platform can greatly enhance productivity, efficiency, and communication among team members, making it a valuable tool for businesses and organizations of all sizes.</p>
                    </div>
                    
                </div>
                <p class="copyright">PMS | Nitin Utsav Bartaula | © 2023</p>
            </div>
        </footer>
    </div>

</body>
</html>
