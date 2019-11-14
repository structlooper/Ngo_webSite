<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
        Contact us | Get in touch
@endsection



@section('content_str')
<div class="content">
    <div class='container mt-2 border rounded' >
        <section class="mb-4">
        

            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

            
            <p class=" text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>
          
            <div class="row">
  

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
  

                        <div class="row">
  

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" placeholder='Your Name'>
                                    
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" placeholder='Your Email'>
                                    
                                </div>
                            </div>

                            
                        </div>

                        

                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder='Subject'>
                                    
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">
                              

                            <div class="col-md-12">
                            <br>
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea" placeholder='message'></textarea>
                                    
                                </div>
  
                            </div>
                        </div>

                        
                    </form>
  
                    <div class="text-center text-md-left">
                        <a class="btn btn-warning col-md-3  " onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>

                

                <div class=" col-md-3 text-center ">
                <h3 class="h1-responsive font-weight-bold text-center my-4">To reach</h3>
                    <ul class="list-unstyled mb-0">
                        @foreach ($ngo_contact_details as $Contact_Detail)
                
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>{!!$Contact_Detail->address!!}</p>
                        </li>
  
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>{{$Contact_Detail->number}}</p>
                        </li>
  
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>{{$Contact_Detail->email}}</p>
                        </li>
                            
                        @endforeach
                    </ul>
                </div>

                
            </div>
  
        </section>
  </div>
</div>
<hr>
@endsection







 

@section('footer_str')

@endsection