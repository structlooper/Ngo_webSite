<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    Events
@endsection



@section('content_str')
<div class="content">
      <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Current events</h3>
     
      <div class='container bg- text-white  '>
          <div class="row">
          @foreach ($datas as $data)
              @if ($data->id % 2 == 0)
              <div class="col-md-4 my-auto bg-info text-white mx-auto mt-2 border">
                  <img class="card-img-top"
                src="{{asset('uploades/events/current_event_slide\\') . $data->image}}"
                alt="Card image cap" height='250px'>
                        <h2>{!! substr($data->content, 0, 10)!!}</h2>
                        <div class="p2">{!! $data->content !!} </div>
                  </div>       
              @else
                  <div class="col-md-4 my-auto bg-white text-dark mx-auto border">
                      <img class="card-img-top"
                      src="{{asset('uploades/events/current_event_slide\\') . $data->image}}"
                      alt="Card image cap" height='250px'>
                    <h2> {!! substr($data->content, 0, 10)!!}</h2>
                    <div class="p2">{!! $data->content !!} </div>
                  </div> 
              @endif
            @endforeach   
          </div>
        </div>
  
  
        <br><br>
        <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Upcoming events</h3>
  <div class="container " style="background-color:#DCD0C0;   ">
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
       
        <br><br>
        <h3 class='display-4  rounded pl-5 text-center text-white' style="background-color:#6d7993;  ">Past events</h3>
    <div class="container" style="background-color:#DCD0C0;  ">
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


<style>
    .p2{
      height: 150px;
      white-space:normal;
      overflow:auto;
      /* text-overflow: ellipsis; */
    }
    </style>




 

@section('footer_str')

@endsection