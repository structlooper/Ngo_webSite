@extends('layouts.master')

@section('title_das_str')
        Donate page data
    
@endsection

@section('content')
<h1 class="display-4 border bg-secondary text-light pl-2">Details & image upload</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        
    @endif
<div class="container border rounded pt-2">
  <form method="post"  action="{{ route('donatePageDataSave')}}" enctype="multipart/form-data" >
          @csrf
          <div class="form-group clearfix">
            <label class="col-sm-3 control-label ">
              Heading 
            </label>
            <div class="col-sm-9">
              <input required type="text" class="heading-1-text form-control bg-light " placeholder="Heading  max : 100 char" maxlength="100"    name="heading" >
            </div>
          </div>
          <br>
          <div class="form-group clearfix">
            <label class="col-sm-3 control-label">
              Content & story 
            </label><span class="text-secondary">here write story for heading.</span>
            <div class="col-sm-9 ">
              <textarea name="content" id="cnt1" class=" summernote "></textarea>
            </div>
          </div>
          <br>
          <div class="col-sm-3 control-label border">
            <label for="">upload image</label>
            <div class="col-sm-9 ml-2">
              <input required type="file" name="image" />
              <label class="">Select a file to upload</label> <br>
              
                  
            </div>
          </div>
          <div class="col-sm-12 padd">
              <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
            </div>
  </form>
</div>
@endsection

@section('scripts')
        <script>

                $(document).ready(function() {
                  $('.summernote').summernote({
                    
                    tabsize: 3,
                    height: 100
                  });
                });   
             
        </script>
@endsection