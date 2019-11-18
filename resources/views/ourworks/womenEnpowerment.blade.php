<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
Women Enpowerment | she can do everything
@endsection



@section('content_str')
<div class="content">
    {{-- <div class="container-fluid ">
        <div id="carouselExampleControls" class="carousel slide rounded" data-ride="carousel">
                <div class="carousel-inner">
                        @foreach ($slideDatas->take(3) as $data)
                            
                        <div class="carousel-item @if($loop->first) active @endif">
                          
                          <img class="d-block w-100" src="{{asset('uploades/ourWork/women/slideImage\\') . $data->image}}" alt="First slide" width='1146px' height='450px'>
                              <div class="container">
                                <div class="carousel-caption text-center">
                                <h1>{{$data->content}}</h1>
                                </div>
                              </div>
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
    </div> --}}
          {{-- <hr> --}}
          @foreach ($sideDatas->take(1) as $sidedata)
          <div class=' '>
                <div class='container py-2 ' >
                      <div class="row featurette">
                          <div class="col-md-7">
                            <h2 class="featurette-heading"><u>{{$sidedata->heading}}</u></h2><span class="text">for women, our promise</span>
                            <p class="lead">{!!$sidedata->content!!}</p>
                          </div>
                          <div class="col-md-5">
                              <img class="featurette-image img-fluid mx-auto" src="{{asset('uploades/ourWork/women/sideContentImage\\') . $sidedata->image}}" alt="500x500"   style="width: 500px; height: 350px;">
                          </div>
                        </div>
                </div>
          </div>
          @endforeach

          <hr>
          <div class="bg-warning">
              <div class="container ">
                   <h1 class="display-4 ml-4 ">Works in Women Enpowerment Field</h1>
              </div>
          </div>
              <div class="position " >
                  <div class=" container  ">
                  <div class='container'>
                      <div class='row text-dark '>
                      @foreach ($specificDatas as $specificData)
                          
                      <div class="card col-lg-4 mx-auto bg-light my-2" style="width: 18rem;">
                              <img class="card-img-top" src="{{asset('uploades/ourWork/women/specificWorkImage\\') . $specificData->image}}" alt="Card image cap">
                              <div class="card-body">
                                <div class="p2">
                                  <p class="card-text">{!!$specificData->content!!} </p>
                                </div>    
                              </div>
                          </div>                  
                          @endforeach
                      </div>
                  </div>
          
                </div>
          </div>
</div>
<hr>
@endsection





@section('script_value')
<style>
    .p2{
        height: 150px;
        white-space:normal;
        overflow:auto;
        /* text-overflow: ellipsis; */
      }
    </style>  
@endsection

 

@section('footer_str')

@endsection