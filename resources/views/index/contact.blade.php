
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.nav')

@section('footer_str')
@section('nav_bar')
@endsection('nav_bar')
@section('header_str')

@endsection('header_str')



<title>Contact us</title>
<!-- body of page................ -->
<!--Section: Contact v.2-->
<div class='container mt-2 border rounded' >
      <section class="mb-4">
      
          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <!--Section description-->
        
          <p class=" text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
              a matter of hours to help you.</p>
        
          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control" placeholder='Your Name'>
                                  
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="email" name="email" class="form-control" placeholder='Your Email'>
                                  
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <br>
                              <div class="md-form mb-0">
                                  <input type="text" id="subject" name="subject" class="form-control" placeholder='Subject'>
                                  
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                            
                          <!--Grid column-->
                          <div class="col-md-12">
                          <br>
                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea" placeholder='message'></textarea>
                                  
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn btn-warning col-md-3  " onclick="document.getElementById('contact-form').submit();">Send</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class=" col-md-3 text-center ">
              <h3 class="h1-responsive font-weight-bold text-center my-4">To reach</h3>
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Address of NGO</p>
                      </li>

                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>ngo contact no.</p>
                      </li>

                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>contact@ngo_mail.com</p>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->

          </div>

      </section>
</div>
<!--Section: Contact v.2-->

<div class='mt-2'>
  @endsection('footer_str')
  
</div>
 