<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- for auto dropdown -->
<style>


  .dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
body{
    background-color: rgba(32, 58, 80, 0.72);   
}
</style>


</head>
<body>
    


    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<header class="header_area ">
        <div class="main_menu  border border-dark pt-4 rounded" style="background-color:pink;  " >
            <div class="container-fluid  ">
                <nav class="navbar navbar-expand-lg   navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="/"><img src="/icons/lgo.png" alt="not found" width="30px" height="30px"><div class="text-dark">Charity</div></a>
                        <a href="/donate" type="button" class="btn btn-danger ml-3">Donate Us!!</a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar text-dark">menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse offset collapse " id="navbarSupportedContent" style="">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link text-dark" href="/">Home</a>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/aboutus/who_we_are">Who we are?</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/aboutus/team">Team</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                                                           
                                <li class="nav-item"><a class="nav-link text-dark" href="/events">Events</a></li>

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Works</a>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/our_works/education">Education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/our_works/health">Health</a> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/our_works/women_enpowerment">Women Enpowerment</a>
                                        </li>
                                    </ul>
                                </li>  
                                <li class="nav-item"><a class="nav-link text-dark" href="/contactUs">Contact us</a></li>
                               {{-- admin login and register portel --}}
                                        @guest
                                        <li class="nav-item border-left">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Admin@Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
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

   
  

  @yield('nav_str')