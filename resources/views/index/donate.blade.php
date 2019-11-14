<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
        Donate online | Give for needer
@endsection



@section('content_str')
<div class="content">
    <div class='container-fluid ml-4 mt-2 '>
  
        <div class='row'>
          <div class="col-sm-6 p-3 p-md-5 text-secondary rounded bg-light">
            @foreach ($DonatePageDatas->take(1) as $DonatePageData)
                
            
            <img class="card-img-top" src="{{asset('uploades/donatePageImage\\') . $DonatePageData->image}}" alt="image" width='500px' height='450px'>
            
          <h1 class="display-4 font-italic"> {{$DonatePageData->heading}}</h1>
            <p class="lead my-3">{!!$DonatePageData->content!!} </p>
            @endforeach
              
          </div>
          <div class="col-sm-5 p-3 p-md-6 text-dark rounded bg-light border ml-2">
            <div class='container '>
              <h1>Support Us!!</h1>
            </div>
            <hr>
            <div class="impact-story"> 
              <div id="tplx-donation-form">
                <form method="post"  action="{{ route('donating') }}" >
                    @csrf
                    
                    <div class="form-group clearfix">
                      <label class="col-sm-3 control-label ">
                        Name 
                      </label>
                      <div class="col-sm-10">
                        <input type="text" class="donationTextField2 form-control " required autocomplete="name" autofocus name="name" >
                      </div>
                    </div>
                    <div class="form-group clearfix">
                      <label class="col-sm-3 control-label">
                        Email 
                      </label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required autocomplete="email">
                      </div>
                    </div>
                    
                    <div class="form-group clearfix">
                      <label class="col-sm-3 control-label">
                        Phone
                      </label>
                      <div class="col-sm-10">
                        <input type="number" size="20"  maxlength="10" class="donationTextField2 form-control" name="txtPhone" id="Phone" required autocomplete="phone">
                      </div>
                    </div>
                    <div class="form-group clearfix">
                      
                      
                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-sm-3 control-label">
                                          Address
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control " name="address" style="min-width: 100%; margin-top: 0px; margin-bottom: 0px; height: 100px;" placeholder="Optional"></textarea>
                                        </div>
                                    </div>
                                      
                                      
                                      <br>
                                      <div class="row ml-1">
                                        <div class="form-group clearfix">
                                          <div class="col-sm-7">
                                            <input type="radio" class="radio-inline" name="amountPayment" id="aamount18" value="5000.00" >
                                            <label class="col-sm- control-label">
                                              Rs.5,000/-per month
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-group clearfix">
                                          <div class="col-sm-7">
                                            <input type="radio" class="radio-inline" name="amountPayment" id="aamount25" value="1000.00" >
                                            <label class="col-sm- control-label">
                                              Rs.1,000/-per month
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-group clearfix">
                                          <div class="col-sm-7">
                                            <input type="radio" class="radio-inline" name="amountPayment" id="aamount50" value="500.00" checked="checked" >
                                            <label class="col-sm- control-label">
                                              Rs.500/-per month
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group clearfix">
                                        <div class="col-sm-1">
                                          <input type="checkbox" name="amountPayment" id="idchk" >
                                        </div>
                                        <label class="col-sm-10 control-label">
                                          <span class="col-sm-4 control-label">
                                            Other amount:
                                          </span>
                                          <span class="col-sm-12">
                                            <input type="number" class="donationTextField2 form-control" name="amountPayment" id="idtxt" size="20" maxlength="12" disabled="disabled"  >
                                          </span>
                                        </label>
                                      </div>
                                                                             
                                      
                                      <div class="col-sm-12 padd">
                                        <input type="submit" value="Donate Now" class="btn btn-warning" name=""  id="tplx-donation-btn">
                                      </div>
                                      
                                    </form>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
      </div>
</div>
<hr>
@endsection



@section('script_value')
<script type="text/javascript">
  $(function (){
      $("#idchk").change( function () {
          var st = this.checked;
          if (st){
              $("#idtxt").prop("disabled", false);

          }
          else{
              $("#idtxt").prop("disabled", true);
          }
      });

      
  });
  
  
</script>
    
@endsection



 

@section('footer_str')

@endsection