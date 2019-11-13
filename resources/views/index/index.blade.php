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
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

                  </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                      <img src="images/img1.jpg" class="d-block w-100" alt="First slide" width='1146px' height='450px'>
                        <div class="carousel-caption d-none d-md-block bg-transparent text-dark">
                          <h5>Information about image</h5>
                        </div>
                    </div>
                <div class="carousel-item">
                    <img src="images/img4.png" class="d-block w-100" alt="Second slide" width='1146px' height='450px'>
                    <div class="carousel-caption d-none d-md-block bg-transparent text-dark">
                      <h5>Information about image_2</h5>
                    </div>
                </div>
                <div class="carousel-item active">
                      <img src="images/img3.jpg" class="d-block w-100" alt="Third slide" width='1146px' height='450px'>
                      <div class="carousel-caption d-none d-md-block bg-transparent text-dark">
                        <h5>Information about image_3</h5>
                      </div>
                    </div>
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
                          <div class="col-md-7">
                            <h2 class="featurette-heading">About NGO_name Foundation </h2><span class="text-muted">Since @2016</span>
                            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                          </div>
                          <div class="col-md-5 ">
                          <img src="images/img2.jpg" alt=""  width='450px' height='400px'>

                        </div>
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
                    <div class="carousel-inner">
                      <div class="carousel-item active">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                      alt="Card image cap">
                              <h2>Education for every child</h2>
                                <p class=p1 >Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

                              </div>
                      <div class="carousel-item">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                      alt="Card image cap">
                                  <h2>Feeding the hungry people</h2>
                                  <p class=p1>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

                                </div>
                      <div class="carousel-item">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                      alt="Card image cap">
                                  <h2>Providing cloth people</h2>
                                  <p class=p1>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, </p>

                                </div>
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
                      <div class="carousel-item active">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                      alt="Card image cap">
                              <h2>Education for every child</h2>
                                <p class=p1>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

                              </div>
                      <div class="carousel-item">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                      alt="Card image cap">
                                  <h2>Feeding the hungry people</h2>
                                  <p class=p1>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        
                      </div>
                      <div class="carousel-item">

                        <img class="card-img-top"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                      alt="Card image cap">
                                  <h2>Providing cloth people</h2>
                                  <p  class='p1 ' >Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, </p>

                                </div>
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

              <div class="col-lg-4 mt-auto  ">
              <img class="card-img-top mt-1"
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
            alt="Card image cap">
                        <h2>Providing cloth people</h2>
                        <p class=p1>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, </p>
                        <p ><a class="btn btn-warning" href="#" role="button">View details »</a></p>
              </div>
          
          </div>
      
      </div>
    


    <!-- INCLUDING FOOTER................................ -->
    <hr>
</div>
@endsection

<style>
  .p1 {
    width: 250px;
    /* height:100px; */
    /* white-space: nowrap; */
    /* overflow: hidden; */
    text-overflow: ellipsis;
    /* background-color: whitesmoke; */
}</style>





 

@section('footer_str')

@endsection


 
