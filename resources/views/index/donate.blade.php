
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.nav')

@section('footer_str')
@section('nav_bar')
@endsection('nav_bar')
@section('header_str')

@endsection('header_str')

<title>Donate online</title>
<hr>
<div class='container-fluid  '>
 
  <div class='row'>
        <div class="col-sm-6 p-3 p-md-5 text-secondary rounded bg-light">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="">
                
                  <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                  <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                
              </div>
         <div class="col-sm-5 p-3 p-md-6 text-dark rounded bg-light border ml-2">
         <div class='container '>
           <h1>Support Us!!</h1>
         </div>
         <hr>
                <div class="impact-story"> 
                    <div id="tplx-donation-form">
                    <form method="post" name="frmSample" action="{{ route('donating') }}" >
                           @csrf
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label ">
                                  Name 
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="donationTextField2 form-control " required autocomplete="name" autofocus name="name" id="name">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Email 
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required autocomplete="email">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Phone
                                  </label>
                                  <div class="col-sm-9">
                                    <input type="text" size="20"  maxlength="10" class="donationTextField2 form-control" name="txtPhone" id="Phone" required autocomplete="phone">
                                  </div>
                                </div>
                                <div class="form-group clearfix">
                                  
                                  
                                </div>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label">
                                  Address
                                  </label>
                                  <div class="col-sm-9">
                                    <textarea name="address" id="" cols="39" rows="5" placeholder="Optional"></textarea>
                                  </div>
                                </div>
                              
                              
                                  <br>
                              <div class="row">
                                  <div class="form-group clearfix">
                                    <div class="col-lg-2">
                                      <input type="radio" class="radio-inline" name="amount_advanced" id="aamount18" value="5000.00" >
                                      <label class="col-sm-11 control-label">
                                        Rs.5,000/-
                                      </label>
                                    </div>
                                  </div>
                                  <div class="form-group clearfix">
                                    <div class="col-lg-2">
                                      <input type="radio" class="radio-inline" name="amount_advanced" id="aamount25" value="1000.00" >
                                      <label class="col-sm-11 control-label">
                                        Rs.1,000/-
                                      </label>
                                    </div>
                                  </div>
                                  <div class="form-group clearfix">
                                    <div class="col-lg-2">
                                      <input type="radio" class="radio-inline" name="amount_advanced" id="aamount50" value="500.00" checked="checked">
                                      <label class="col-sm-11 control-label">
                                        Rs.500/-
                                      </label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="col-sm-1">
                                      <input type="radio" name="amount_advanced" id="aamountother" onclick="custom_amount_read()">
                                    </div>
                                    <label class="col-sm-11 control-label">
                                    <span class="col-sm-4 control-label">
                                    Other amount:
                                    </span>
                                    <span class="col-sm-8">
                                    <input type="text" class="donationTextField1 form-control" name="number" id="number" size="20" maxlength="12" onfocus="custom_amount()" onblur="custom_amount()" border:="" 0px="">
                                    </span>
                                    </label>
                                  </div>
                                  <div class="row2">  <input id="submit_amount" type="hidden" name="AMOUNT" value=""></div>
                                  
                                  <input type="hidden" name="Order_Id" value=""> 
                                  <input type="hidden" name="Merchant_Id" value="">

                             <div class="col-sm-12 padd">
                                 <input type="submit" value="Donate Now" class="btn btn-warning" name=""  id="tplx-donation-btn">
                             </div>

                         </form>
                   </div>
             </div>
         </div>
                       
  </div>
</div>

<div class='mt-2'>
  @endsection('footer_str')
  

 