<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> 
   <link rel="icon" type="image/png" href="../assets/img/favicon.png"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin | @yield('title_das_str')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  
  
</head>

<body class="">
  <div class="wrapper ">
    
    
    <div class="sidebar bg-info" data-color="">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo  ">
        <a href="/"><img src="/icons/lgo.png" alt="not found" width="50px" height="50px"><span class='ml-2 display-4 text-white'>charity</span></a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="{{route('dashboard')}}">
              <i class="now-ui-icons design_app"></i>
              <b>Dashboard</b>
            </a>
          </li>
          <li class="ml-4 text-success border-bottom">
              <h5>Site Contents</h5>      
          </li>             
          <li>
            <a href="{{route('homepageEdit')}}">
              <i class="now-ui-icons business_bulb-63"></i>
              <b>Home Page Edit</b>
            </a>
          </li>
          <li>
          <li>
            <label for="" class="ml-4 text-white"><b> About us Edit</b>
            <a href="{{route('aboutusEdit')}}">
              <i class="now-ui-icons ui-2_like"></i>
              <p class="text-white">Who_we_are</p>
            </a>
            <a href="{{route('aboutusEditTeam')}}">
              
              <p class="ml-5 text-white">Our_Team</p>
            </a>
          </label>
          </li>
          <li>
            <a href="{{route('eventsEdit')}}">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <b>Events Edit</b>
            </a>
          </li>
          <li>
            <label class="ml-4 text-white" ><b>Our works edit</b>
            <a href="{{route('ourWorksEducationEdit')}}">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p class="text-white">Education Edit</p>
            </a>
            <a href="{{route('ourWorksHealthEdit')}}">
             
              <p class="text-white ml-5">Health Edit</p>
            </a>
            <a href="{{route('ourWorksWomenEnpowermentEdit')}}">
             
              <p class="text-white ml-5">Women Enpt Edit</p>
            </a>
          </label>
          </li>
          <li>
              <a href="{{route('donateEdit')}}">
                <i class="now-ui-icons business_money-coins"></i>
                <b>Donate Page</b>
              </a>
            </li>
          <li>
              <a href="{{route('contactPageEdit')}}">
                <i class="now-ui-icons ui-1_email-85"></i>
                <b>Contact page</b>
              </a>
            </li>
            <li class="ml-4 text-success border-bottom">
                <h5>profiles</h5>      
              </li>
          <li>
            <a href="{{route('profiles')}}">
              <i class="now-ui-icons users_single-02"></i>
              <b>Admin Profiles list</b>
            </a>
          </li> 
        </ul>
      </div>
    </div>
    
    
    <div class="main-panel " id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  ">
        <div class="container-fluid py-2 bg-info">
          <div class="navbar-wrapper ">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end " id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            
            <ul class="navbar-nav ">
              <li class="nav-item dropdown border-left  pr-5">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="now-ui-icons users_single-02" ></i>
                      {{ Auth::user()->name }} 
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('dashboard') }}"
                          ><i class="now-ui-icons design_app"></i>
                              {{ __('Dashboard') }}
                          </a>
                          <a class="dropdown-item" href="{{ route('index') }}"
                          ><i class="now-ui-icons business_bulb-63"></i>
                              {{ __('View Home') }}
                          </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <i class="now-ui-icons media-1_button-power"></i>
                          {{ __('Logout') }}
                      </a>
                      
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              
                          @csrf
                      </form>
                  </div>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
     
      
      
   
   
      <div class="content mt-5">
        @yield('content')
      </div>
      
      
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed & . Coded by
            <a href="#ourwebsite" target="_blank">TarKuli Pvt. ltd</a>
           
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  
  <!-- include summernote css/js -->
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  
   @yield('scripts')
 
</body>

</html>