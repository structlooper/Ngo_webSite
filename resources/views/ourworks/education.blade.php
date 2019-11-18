<!-- Header BAR..................................... -->
@extends('layouts.footer')
@extends('layouts.nav')

@section('title_str')
Eduction | Learning is must
@endsection



@section('content_str')
<div class="content">
    
    @foreach ($sideDatas as $sidedata)
        
    <div >
            <div class='container py-2 ' >
                <div class="row featurette">
                    <div class="col-md-7">
                    <h2 class="featurette-heading"><u> {{$sidedata->heading}}</u></h2><span class="text-muted">for children, our promise</span>
                        <p class="lead">{!!$sidedata->content!!} </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="{{asset('uploades/ourWork/education/sideContentImage\\') . $sidedata->image}}" alt="500x500"   style="width: 500px; height: 350px;">
                    </div>
                    </div>
            </div>
    </div>
    @endforeach

    <div class="bg-warning">
        <div class="container ">
             <h1 class="display-4 ml-4 ">Works in Education Field</h1>
        </div>
    </div>
        <div class="position " >
            <div class=" container  ">
            <div class='container  text-light'>
                <div class='row text-dark '>
                @foreach ($specificDatas as $specificData)
                    
                <div class="card col-lg-4 mx-auto bg-light my-2" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('uploades/ourWork/education/specificWorkImage\\') . $specificData->image}}" alt="Card image cap">
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