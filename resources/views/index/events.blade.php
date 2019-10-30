<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    Events
@endsection



@section('content_str')
<div class="content">
  <div class='container '>
        <div class='row'>
    <h3 class='display-4 bg-warning rounded'>Current events</h3>
        <div class='col-lg-auto border  ml-auto mt-auto pt-2 '>
        
        <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
            <!-- <div class="col-lg-4 mt-1 "> -->
              <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
            alt="Card image cap" width="250px" height="250px">
                    <h2><u> Education for every child </u></h2>
                      <p >Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-danger" href="#" role="button">View details »</a></p>
              <!-- </div>/.col-lg-4 -->
            </div>
            <div class="carousel-item">
            <!-- <div class="col-lg-4 mt-1 bg-white text-dark"> -->
              <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
            alt="Card image cap" width="250px" height="250px">
                        <h2><u>Feeding the hungry people</u></h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        <p><a class="btn btn-danger" href="#" role="button">View details »</a></p>
              <!-- </div>/.col-lg-4 -->
            </div>
            <div class="carousel-item">
            <!-- <div class="col-lg-4 mt-1"> -->
              <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
            alt="Card image cap" width="250px" height="250px">
                        <h2><u>Providing cloth people</u></h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, </p>
                        <p><a class="btn btn-danger" href="#" role="button">View details »</a></p>
              <!-- </div>/.col-lg-4 -->
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
  </div>
        <hr>
  <div class="container">
    <div class="row">
     <h3 class='display-4 bg-warning rounded'>Upcoming events</h3>
    <div class="col-lg-12 border">
                <table class="table ">
            <thead class="bg-dark text-white">
                <tr>
                <th scope="col">S no.</th>
                <th scope="col">Event Details</th>
                <th scope="col">Place</th>
                <th scope="col">Duration{dd-dd}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>

    </div>
   </div>
    </div>  
        <hr>
    <div class="container">
   <div class="row">
   <h3 class='display-4 bg-warning rounded'>Past events</h3>
    <div class="col-lg-12 border">
                <table class="table ">
            <thead class="bg-dark text-white">
                <tr>
                <th scope="col">S no.</th>
                <th scope="col">Event Details</th>
                <th scope="col">Place</th>
                <th scope="col">Duration{dd-dd}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>test</td>
                <td>the Bird</td>
                <td>10/oct-20/oct</td>
                </tr>
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