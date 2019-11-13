
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    about us | Our team
@endsection



@section('content_str')
<div class="content">
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach ($datas->take(3) as $data)
                
            <div class="carousel-item @if($loop->first) active @endif">
              <div class="container">
                <div class="carousel-caption text-left">
                <h1>{{$data->slide_details}}</h1>
                </div>
              </div>
              <img class="d-block w-100" src="{{asset('uploades/aboutus/team/slideImage\\') . $data->image}}" alt="Slide Image" width='1146px' height='450px'>
            </div>
            @endforeach
            
          </div>
         
          <a class="carousel-control-prev bg-dark" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only ">Previous</span>
          </a>
          <a class="carousel-control-next bg-dark" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <hr>
  </div>
  
  <div class='container-fluid rounded border'>
    <h1 class="display-4 ml-4 container">Education Department</h1>
    <div class='row'>
      @foreach ($memberDatas as $memberData)
      @if ($memberData->department_name === "education")
              <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('uploades/aboutus/team/memberImage\\') . $memberData->image}}" alt="Card image cap">
              <div class="card-body">
              <p class="card-text">{{ $memberData->member_name }} <br>{{ $memberData->department_name }} <br>{{ $memberData->member_email }} <br>{{ $memberData->member_more_details }}</p>
              </div>
            </div>
        @endif
        @endforeach      
     </div>
    </div>

     
     
     <div class='container-fluid border mt-2 border-rounded'>
       <h1 class="display-4 ml-4 container">Health Department</h1>
       <div class='row'>
         @foreach ($memberDatas as $memberData)
         @if ($memberData->department_name === "health")
            <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('uploades/aboutus/team/memberImage\\') . $memberData->image}}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ $memberData->member_name }} <br>{{ $memberData->department_name }} <br>{{ $memberData->member_email }} <br>{{ $memberData->member_more_details }}</p>
              </div>
            </div>
          @endif
          @endforeach
        </div>
      </div>
               
               
      
      <div class='container-fluid rounded border mt-2'>
          <h1 class="display-4 ml-4 container">Women Enpowerment Department</h1>
          <div class='row'>
              @foreach ($memberDatas as $memberData)
              @if ($memberData->department_name === "women_enpowerment")
              <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('uploades/aboutus/team/memberImage\\') . $memberData->image}}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ $memberData->member_name }} <br>{{ $memberData->department_name }} <br>{{ $memberData->member_email }} <br>{{ $memberData->member_more_details }}</p>
              </div>
              </div>
              @endif
              @endforeach    
        </div>
      </div>
     
  

</div>
<hr>
@endsection







 

@section('footer_str')

@endsection