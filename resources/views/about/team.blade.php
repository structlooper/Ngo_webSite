
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.nav')

@section('footer_str')
@section('nav_bar')
@endsection('nav_bar')
@section('header_str')

@endsection('header_str')

<title>Our team</title>
<hr>
<!-- body of page................ -->
<div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="First slide" width='1146px' height='450px'>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Second slide" width='1146px' height='450px'>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Third slide" width='1146px' height='450px'>
          </div>
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
<div class='container rounded border'>
    <h1 class="display-4 ml-4">Department 1</h1>
    <div class='row'>
        <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
     
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
    
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
</div>

<div class='container rounded border mt-2'>
    <h1 class="display-4 ml-4">Department 2</h1>
    <div class='row'>
        <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
     
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
    
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
</div>

<div class='container rounded border mt-2'>
    <h1 class="display-4 ml-4">Department 3</h1>
    <div class='row'>
        <div class="card col-lg-3 mx-auto  my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
     
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
     </div>
    
        <div class="card col-lg-3 mx-auto my-2" style="width: 18rem;">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
</div>




  
  <!-- </div> -->
<div class='mt-2'>
  @endsection('footer_str')
  
</div>
 