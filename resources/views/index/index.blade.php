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
            <li data-target="#carouselExampleCaptions" data-slide-to="Slide image {{$pos}}" class=" @if($loop->first) active @endif"></li>
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
                          
                          <div class="col-md-7">
                                
                            <h2 class="featurette-heading">{{$about_ngo_data->heading}}</h2><span class="text-muted">Since @2016</span>
                            <p class="lead">{!! $about_ngo_data->content !!}</p>
                          </div>
                          <div class="col-md-5 ">
                            <img src="{{asset('uploades/HomePage/AboutNgoImage\\') . $about_ngo_data->image}}" alt="image"  width='450px' height='400px'>
                            
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
              <div class='col-lg-6    ml-auto mt-auto pt-auto '>
                <div class="container border bg-white">
                  <h3>Education</h3>
                  <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
                    <div class=" carousel-inner">
                      @foreach ($home_education_slide_datas->take(3) as $education_slide_data)
                          
                      
                      <div class="carousel-item  @if($loop->first) active @endif">

                        <img class="card-img-top"
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
                        <img class="card-img-top"
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
    <div class='container bg-info text-white  '>
    <div class="row">
              <div class="col-lg-4 mt-auto ">
              <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
            alt="Card image cap">
                    <h2>Education for every child</h2>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-warning" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-lg-4 mt-auto bg-white text-dark pt-2 my-1">
              <img class="card-img-top "
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
            alt="Card image cap">
                        <h2>Feeding the hungry people</h2>
                        <p >Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        <p><a class="btn btn-info" href="#" role="button">View details »</a></p>
              </div>

              
          
          </div>
      
      </div>
    


    <!-- INCLUDING FOOTER................................ -->
    <hr>
</div>
@endsection

<style>
  .p1 {
    /* width: 80%; */
    height: 200px;
    white-space:unset;
    overflow:scroll;
    text-overflow: ellipsis;
    /* background-color: whitesmoke; */
}</style>





 

@section('footer_str')

@endsection


 
