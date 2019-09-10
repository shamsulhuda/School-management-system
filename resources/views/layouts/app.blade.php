<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My School') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="{{asset("css/bootstrap.css")}}" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    
    <!-- Style-CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                    <!-- logo -->
                    <div id="logo">
                        <h2><a class="navbar-brand" href="{{ url('/') }}">My School</a></h2>
                        
                    </div>
                    <!-- //logo -->
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li>
                            <label><i class="fa fa-user"></i><strong> {{Auth::user()->name}}</strong> <span class="fa fa-angle-down" aria-hidden="true"></span></label>
                            <ul>
                                <li><a href="#events" class="drop-text">Profile</a></li>
                                <li><a href="#what" class="drop-text">Settings</a></li>
                                <li>
                                    <a href="{{route('logout')}}" class="drop-text" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
        @if(Auth::check())
            <div class="container">
                <div class="row">
                
                <div class="col-md-4 py-0">
                        <div class="accordion md-accordion accordion-2 mb-3 list-group" id="accordionEx7" role="tablist" aria-multiselectable="true">

                            <div class="card">
                                <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                                    <a class="collapsed" href="{{ route('home') }}" style="text-decoration: none; color: dark;">
                                        <h5 class="mb-0 white-text text-uppercase font-thin ">
                                            Dashboard <i class="fa fa-home" style="float: right;"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card header -->
                            <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="false" aria-controls="collapse1" style="text-decoration: none;">
                                    <h5 class="mb-0 text-uppercase font-thin ">
                                        About <i class="fa fa-angle-down rotate-icon" style="float: right;"></i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx7">
                                <div class="card-body p-0 rgba-grey-light border-0">
                                    <ul class="card list-group">
                                        <li class="list-group-item">
                                            <a class="nav-link" href="{{url('admin/about')}}">About Us</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Organization structure</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Organization strength</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Organizational Role</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Divisions</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Consultancy</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="nav-link" href="">Project Implementation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                                <!-- Card 2  -->
                        <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2" aria-expanded="false" aria-controls="collapse2" style="text-decoration: none;">
                                <h5 class="mb-0 white-text text-uppercase font-thin ">
                                    Programs <i class="fa fa-angle-down rotate-icon" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx7">
                            <div class="card-body p-0 rgba-grey-light white-text">
                                <ul class="card list-group">
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Agriculture & Food security</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Child Rights</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Climate Change</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Industrial Development</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                            

                            <!-- single link -->
                    <div class="card">
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                            <a class="collapsed" href="{{ route('home') }}" style="text-decoration: none; color: dark;">
                                <h5 class="mb-0 white-text text-uppercase font-thin ">
                                Training & workshops <i class="fa fa-home" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- /single link -->
                    <!-- single link -->
                    <div class="card">
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                            <a class="collapsed" href="{{ route('home') }}" style="text-decoration: none; color: dark;">
                                <h5 class="mb-0 white-text text-uppercase font-thin ">
                                Events <i class="fa fa-home" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- /single link -->
                    <!-- {{-- Card 2 --}} -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading4">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse4" aria-expanded="false" aria-controls="collapse4" style="text-decoration: none;">
                                <h5 class="mb-0 white-text text-uppercase font-thin ">
                                    Resources <i class="fa fa-angle-down rotate-icon" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx7">
                            <div class="card-body p-0 rgba-grey-light white-text">
                                <ul class="card list-group">
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Reports</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Presentations</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Publications</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Posters and leaflets</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Media coverage</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Press release</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- {{-- Card --}} -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading5">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse5" aria-expanded="false" aria-controls="collapse5" style="text-decoration: none;">
                                <h5 class="mb-0 white-text text-uppercase font-thin">
                                    My profile <i class="fa fa-angle-down rotate-icon" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx7">
                            <div class="card-body p-0 rgba-grey-light white-text">
                                <ul class="card list-group">
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Update profile</a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>

                            <!-- {{-- Card --}} -->
                    <div class="card">

                            <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading6">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse6" aria-expanded="false" aria-controls="collapse6" style="text-decoration: none;">
                                <h5 class="mb-0 white-text text-uppercase font-thin">
                                    Setings <i class="fa fa-angle-down rotate-icon" style="float: right;"></i>
                                </h5>
                            </a>
                        </div>

                                <!-- Card body -->
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx7">
                            <div class="card-body p-0 rgba-grey-light white-text">
                                <ul class="card list-group">
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Manage users</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="nav-link" href="">Manage site Info</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            @endif
            @yield('content')
            
        </main>
        </div>
    
</body>
</html>
