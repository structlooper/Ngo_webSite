
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
    about us | Who we are?
@endsection



@section('content_str')

<div class="content">
    @foreach ($datas as $data)
      @if ($data->id%2 == 0)
          
      <div class='container'>
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">{{ $data->heading }} </h2>
                    <p class="lead">{!! $data->content !!}</p>
                  </div>
                  <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto"  alt="500x500" src="{{ asset('uploades/aboutus/who_we_are/' . $data->image) }}"  style="width: 500px; height: 500px;">
                  </div>
                </div>
            </div>  
                <hr>
                @else
              <div class='container'>     
                <div class="row featurette">
                  <div class="col-md-7">
                      <h2 class="featurette-heading">{{ $data->heading }}</h2>
                      <p class="lead">{!! $data->content !!}</p>
                    </div>
                    <div class="col-md-5">
                      <img class="featurette-image img-fluid mx-auto" alt="500x500" src="{{ asset('uploades/aboutus/who_we_are/' . $data->image) }}"  style="width: 500px; height: 500px;">
                    </div>
                  </div>
                </div>
              </div>
              <hr>
    @endif
    @endforeach
    @endsection
              






 

@section('footer_str')

@endsection
 