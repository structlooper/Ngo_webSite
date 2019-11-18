@yield('footer_str')
<div class=' border border-dark ml-1 border-bottom-0 rounded text-white' style="background-color:#3C4147;  ">
 
        <footer class="page-footer font-small stylish-color-light pt-4">


          <div class="container text-center  text-md-left px-2">


            <div class="row">


              <div class="col-md-4 mx-auto">


                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">NGO_NAME</h5>
                <p>testing_address 
                    <br>
                    testing area <br>New Delhi - 110059</p>

              </div>


              <hr class="clearfix w-100 d-md-none">


              <div class="col-md-2 mx-auto ">


                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About us</h5>

                <ul class="list-unstyled">
                  <li>
                    <a style="text-color:#717D7E;  " href="{{route('who_we_are')}}">About us</a>
                  </li>
                  
                  <li>
                    <a style="text-color:#717D7E;  " href="{{route('team')}}">Team</a>
                  </li>
                  
                </ul>

              </div>


              <hr class="clearfix w-100 d-md-none">


              <div class="col-md-2 mx-auto">


                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                  <li>
                    <a style="text-color:#717D7E;  " href="{{route('events')}}">Events</a>
                  </li>
                  
                  <li>
                  <a style="text-color:#717D7E;  " href="{{route('contactUs')}}">Contact us</a>
                  </li>
                  
                </ul>

              </div>


              <hr class="clearfix w-100 d-md-none">


              <div class="col-md-2 mx-auto">


                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Get in touch</h5>

                <ul class="list-unstyled">
                  <li class='pt-0'>
                    <a style="text-color:#717D7E;  " href="#!"><img src="{{asset('/icons/facebook.png')}}" width='20px' height='20px'alt="fb"> facebook</a>
                  </li>
                  <li class='pt-1'>
                    <a style="text-color:#717D7E;  " href="#!"><img src="{{asset('/icons/twitter.png')}}" width='20px' height='20px' alt="tw"> twitter</a>
                  </li>
                  <li class='pt-1'>
                    <a style="text-color:#717D7E;  " href="#!"><img src="{{asset('/icons/linkedin.png')}}" width='20px' height='20px' alt="lN"> linkedin</a>
                  </li>
                  
                </ul>

              </div>


            </div>


          </div>


          <hr>


          <ul class="list-unstyled list-inline text-center py-2 ">
            <li class="list-inline-item">
              <h5 class="mb-1 ">Support us!</h5>
            </li>
            <li class="list-inline-item">
            <a href="{{route('dontePage')}}" type="button" class="btn btn-success ml-3">Donate us</a>
            </li>
          </ul>


          <hr>

          

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 ">© 2018 Copyright:<br><I>ngo_name</I>@
            <a href="{{route('index')}}" class="text-primary">NGO_NAME.com</a>
          </div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </div>
</body>
</html> 