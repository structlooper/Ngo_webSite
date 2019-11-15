
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    about us | Our team
@endsection



@section('content_str')
<div class="content">
    <div class="container-fluid">
        {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
        </div> --}}

        <div class="header-image">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-7">

                  <img class="d-block- " src="/images/team_head.png" alt="Slide Image" width='px' height='400px'>
                </div>
              <div class="col-lg-5">
                <h1 class="text-center ml-5 mt-4 border-bottom">Meet Our Team</h1>
                <div class="container">

                  <p>According to the team approach to leadership, a team is a type of organizational group of people that are members. A team is composed of members who are dependent on each other, work towards interchangeable achievements, and share common attainments. A team works as a whole together to achieve certain things.
                    ‎Team building · ‎Team composition · ‎Team effectiveness · ‎Teamwork
                    People also ask</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
  </div>
  
  <div class='container-fluid rounded border'>
    
    <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Education Department</h3>

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
       
       <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Health Department</h3>
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
          
          <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Women Enpowerment Department</h3>
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