<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    Events
@endsection



@section('content_str')
<div class="content">
  <h3 class='display-4 bg-warning rounded pl-5'>Current events</h3>
  <div class='container'>
      <div class="container-fluid">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @foreach ($datas->take(3) as $data)
                  
              <div class="carousel-item @if($loop->first) active @endif">
                <div class="container">
                  <div class="carousel-caption text-left">
                  <h1>{{$data->content}}</h1>
                  </div>
                </div>
                <img class="d-block w-100" src="{{asset('uploades/events/current_event_slide\\') . $data->image}}" alt="First slide" width='1146px' height='450px'>
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
  </div>
  
  
        <hr>
        <h3 class='display-4 bg-warning rounded pl-5'>Upcoming events</h3>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 border">
                <table class="table ">
            <thead class="bg-dark text-white">
                <tr>
                <th scope="col">S no.</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Details</th>
                <th scope="col">Place</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                </tr>
            </thead>
            <tbody>
              <tr>
              @foreach ($upcomingDatas as $upcomingData)
                  
              
                <tr>
                <th scope="row"> {{ $upcomingData->id }} </th>
                <td> {{$upcomingData->event_name}} </td>
                <td> {!!$upcomingData->event_details!!} </td>
                <td> {{$upcomingData->place}} </td>
                <td> {{$upcomingData->duration_start}} </td>
                <td>{{ $upcomingData->duration_end }} </td>
                
                </tr>
                      
              @endforeach
            </tr>
            </tbody>
            </table>

        </div>
      </div>
    </div>  
       
        <hr>
        <h3 class='display-4 bg-warning rounded pl-5'>Past events</h3>
    <div class="container">
   <div class="row">
    <div class="col-lg-12 border">
                <table class="table ">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col-auto">S no.</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Details</th>
                    <th scope="col">Place</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($historyDatas as $historyData)
                  
              
                    <tr>
                    <th scope="row"> {{ $historyData->id }} </th>
                    <td> {{$historyData->event_name}} </td>
                    <td> {!!$historyData->event_details!!} </td>
                    <td> {{$historyData->place}} </td>
                    <td> {{$historyData->duration_start}} </td>
                    <td>{{ $historyData->duration_end }} </td>
                    
                    </tr>
                          
                </tr>
                @endforeach
            </tbody>
            </table>

        </div>
      </div>
    </div> 
</div>
<hr>
@endsection







 

@section('footer_str')

@endsection