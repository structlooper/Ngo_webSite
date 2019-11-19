<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   @yield('script_value')
<!-- for auto dropdown -->
<style>


        .dropdown:hover>.dropdown-menu {
        display: block;
        }

        .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
            pointer-events:stroke;
        }
        #navigation,.navbar .navbar-default{
         background-image: url("img/nav.jpg");
        }
</style>

<title>
    @yield('title_str')
</title>
</head>
<body>
    


    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<header class="header_area ">
        <div class="main_menu  border border-top-0 border-dark   rounded"  style="background: linear-gradient(to bottom right, #4568dc , #b06ab3); " >
            <div class="container-fluid  ">
                <nav class="navbar navbar-expand-lg   navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{route('index')}}"><img src="{{asset('/icons/lgo.png')}}" alt="not found" width="70px" height="70px"><div class="text-white">Charity</div></a>
                        <a href="{{route('dontePage')}}" type="button" class="btn btn-success ml-3">Donate Us!!</a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar text-white">---</span>
                            <span class="icon-bar"><br>menu </span>
                            <span class="icon-bar"><br>---</span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse offset collapse " id="navbarSupportedContent" style="">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link text-white" href="{{route('index')}} ">Home</a>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('who_we_are')}} ">Who we are?</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('team')}}">Team</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                                                           
                                <li class="nav-item"><a class="nav-link text-white" href="{{route('events')}}">Events</a></li>

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Works</a>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('education')}}">Education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('health')}}">Health</a> 
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('WomenEnpowerment')}}">Women Enpowerment</a> 
                                        </li>
                                        
                                    </ul>
                                </li>  
                                <li class="nav-item"><a class="nav-link text-white" href="{{route('contactUs')}}">Contact us</a></li>
                               {{-- admin login and register portel --}}
                                        @guest
                                        <li class="nav-item border-left">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        
                                    @else
                                        <li class="nav-item dropdown border-left">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <i class="now-ui-icons users_single-02" alt='Admin'></i>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('dashboard') }}"
                                                    >
                                                        {{ __('Dashboard') }}
                                                    </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                               
                                
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>
    </header>
@yield('content_str')
