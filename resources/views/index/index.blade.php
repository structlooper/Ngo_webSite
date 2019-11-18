<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    NGO_Name | Taq line for ngo
@endsection


@section('content_str')
<div class='content'>
      <!-- SLIDE COROUSEL.................................... -->
      <div class="container-">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
              @foreach ($home_slide_datas->take(3) as $slide_data)
              <?php $pos=1 ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="Slide image {{$pos}}" class=" @if($loop->last) active @endif"></li>
              <?php $pos++ ?>
              @endforeach
                  </ol>
                <div class="carousel-inner">
                    <?php $pos=1 ?>
                    @foreach ($home_slide_datas->take(3) as $slide_data)
                    <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{asset('uploades/HomePage/main_slide\\') . $slide_data->image}}" class="d-block w-100" alt="Slide image {{$pos}}" width='1146px' height='450px'>
                        <div class="carousel-caption d-none d-md-block bg-transparent text-dark">
                        <h5 class="display-4 text-light">{{$slide_data->content}}</h5>
                        </div>
                    </div>
                    <?php $pos++ ?>
                    @endforeach

                
              </div>
              <a class="carousel-control-prev bg-dark" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next bg-dark" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </div>
        <!-- second block............. -->
        <hr>
        <div style="background-color: rgb(219, 204, 204);">
          <div class='container pt-2'>
              <div class="row">
                    
                    <!-- features assment informer........... -->
                        <div class="row featurette">
                          @foreach ($home_about_ngo_datas as $about_ngo_data)
                              
                          @if ($loop->last)
                          
                          <div class="col-md-6">
                                
                            <h2 class="featurette-heading border-bottom border-secondary">{{$about_ngo_data->heading}}</h2><span class="text-muted">Since @2016</span>
                            <p class="lead ">{!! $about_ngo_data->content !!}</p>
                          </div>
                          <div class="col-md-6 ">
                            <img src="{{asset('uploades/HomePage/AboutNgoImage\\') . $about_ngo_data->image}}" alt="image" width="650"  height='400px'>
                            
                          </div>
                          @endif
                          @endforeach
                        </div>
                    <br>
                  
              </div>  
          </div>
        </div> 

        <!--our Works Portion.............................................. -->
          <h1 class='display-4  rounded pl-5 text-center text-white'style="background-color:#6d7993;  ">Our Works</h1>
        <div style="background-color:rgb(179, 207, 228)">
          <div class="container" >   
            <div class='row'>
            
              <!-- Education Field....................... -->
              <div class='col-lg-6    my-auto mx-auto pt-auto '>
                <div class="container border bg-white">
                  <h3>Education</h3>
                  <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
                    <div class=" carousel-inner">
                      @foreach ($home_education_slide_datas->take(3) as $education_slide_data)
                          
                      
                      <div class="carousel-item @if($loop->first) active @endif">

                        <img class="card-img-top border-top pb-3"
                      src="{{asset('uploades/HomePage/ourWork/EductionSlideImage\\') . $education_slide_data->image}}"
                      alt="Card image cap" width='450px' height='400px'>
                      
                      <div class="carousel-details text-left">
                              <h2>{{ $education_slide_data->heading }}</h2>
                              <div class="p1">{!! $education_slide_data->content !!} </div>
                                

                              </div>
                            </div>
                       @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
                  


              <!-- Health Field................................... -->
                <div class='col-lg-6 ml-auto mt-auto  pt-auto'>
                <div class="container border bg-white">
                <h3>Health</h3>
                  <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      @foreach ($home_health_slide_datas->take(3) as $health_slide_data)
                     <div class="carousel-item @if($loop->first)active @endif">
                        <img class="card-img-top border-top"
                      src="{{asset('uploades/HomePage/ourWork/HealthSlideImage\\') . $health_slide_data->image}}"
                      alt="Card image cap" width='450px' height='384px'>
                      <div class="carousel-details text-left">

                              <h2>{{ $health_slide_data->heading}}</h2>
                                <p class=p1>{{ $health_slide_data->content }}</p>

                      </div>
                    </div>
                      @endforeach
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


          

    <!-- Cards portion for informations.............................. -->
    <h1 class='display-4  rounded pl-5 text-center text-white'style="background-color:#6d7993;  ">Creating Impact</h1>
    <div class='container bg- text-white  '>
      <div class="row">
      @foreach ($home_creating_impact_datas as $impact_data)
          @if ($impact_data->id % 2 == 0)
          <div class="col-lg-4 my-auto bg-info text-white mx-auto py-2 border">
              <img class="card-img-top"
            src="{{asset('uploades/HomePage/CreatingImpact\\') . $impact_data->image}}"
            alt="Card image cap" height='250px'>
                    <h2>{{ $impact_data->heading }}</h2>
                    <div class="p2">{!! $impact_data->content !!} </div>
              </div>       
          @else
              <div class="col-lg-4 my-auto bg-white text-dark mx-auto border py-2  ">
                  <img class="card-img-top"
                  src="{{asset('uploades/HomePage/CreatingImpact\\') . $impact_data->image}}"
                  alt="Card image cap" height='250px'>
                <h2> {{ $impact_data->heading }}</h2>
                <div class="p2">{!! $impact_data->content !!} </div>
              </div> 
          @endif
        @endforeach   
      </div>
    </div>
    


    <!-- INCLUDING FOOTER................................ -->
    <hr>
</div>
@endsection

<style>
  .p1 {
    
    height: 200px;
    white-space:normal;
    overflow:auto;
    text-overflow: ellipsis;
    
  }
  .p2{
    height: 150px;
    white-space:normal;
    overflow:auto;
    /* text-overflow: ellipsis; */
  }
}</style>





 

@section('footer_str')

@endsection


 
