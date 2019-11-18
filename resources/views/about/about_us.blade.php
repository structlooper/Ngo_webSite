
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    about us | Who we are?
@endsection



@section('content_str')

<div class="content">
    @foreach ($datas as $data)
      @if ($data->id%2 == 0)
      <div class='border-bottom border-dark'>
      <div class='container-fluid py-3' >
        <div class="row featurette">
          <div class="col-md-5 order-md-2">
                <div class=" pl-2 ">
                  <h2 class="featurette-heading text-center border-bottom">{{ $data->heading }} </h2>
                  <p class="lead">{!! $data->content !!}</p>
                </div>
              </div>
                  <div class="col-md-6 order-md-1">
                    <div class="container pl-5">
                      <img class="featurette-image img-fluid mx-auto"  alt="image" src="{{ asset('uploades/aboutus/who_we_are/' . $data->image) }}"  style=" height: 500px;">
                    </div>
                  </div>
                </div>
            </div> 
          </div>
                
                @else
            <div class='border-bottom border-dark'  >   
              <div class='container-fluid py-3'>     
                <div class="row featurette">
                  <div class="col-md-6 order-md-1">
                    <div class="pl-5">
                      <h2 class="featurette-heading text-center border-bottom">{{ $data->heading }}</h2>
                      <p class="lead">{!! $data->content !!}</p>
                      </div>
                    </div>
                    <div class="col-md-5 order-md-2">
                      <div class="container ml-5">
                        <img class="featurette-image img-fluid mx-auto" alt="image" src="{{ asset('uploades/aboutus/who_we_are/' . $data->image) }}"  style=" height: 450px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>
              
    @endif
    @endforeach
    @endsection
              






 

@section('footer_str')

@endsection
 