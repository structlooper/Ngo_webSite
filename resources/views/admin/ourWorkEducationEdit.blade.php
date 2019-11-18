@extends('layouts.master')

@section('title_das_str')
        Education Portion
    
@endsection

@section('content')
     <div class="container">
                <h1 class="display-4 border bg-secondary text-light pl-2">Education Details Upload</h1>
                <div class="container border rounded pt-2">
                    <form method="post"  action="{{ route('educationSlideSave')}}" enctype="multipart/form-data" >
                            @csrf
                            <h2>Slide Details upload</h2>
                            <div class="col-sm-3 control-label border">
                              <label for="">upload image</label>
                              <div class="col-sm-9 ml-2">
                                <input required type="file" name="slide_image" />
                                <label class="">Select a file to upload</label> <br>                               
                              </div>
                            </div>
                            <br>
                                <div class="form-group clearfix">
                                  <label class="col-sm-3 control-label ">
                                    Slide image details
                                  </label>
                                  <div class="col-sm-9">
                                    <input required type="text" class="heading-1-text form-control bg-light " placeholder="Heading  max : 100 char" maxlength="100"    name='content' >
                                  </div>
                                </div>
                                <br>
                            <div class="col-sm-12 padd">
                              <input type="submit" value="Save Now" class="btn btn-warning btn-lg" >
                              </div>
                    </form>
                </div>
                
                
                
                <br><br>
                <h1 class="display-4 border bg-secondary text-light pl-2">Details & side image</h1>
                <div class="container border rounded pt-2">
                  <form method="post"  action="{{ route('educationSideDataSave')}}" enctype="multipart/form-data" >
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
              

              <br><br>
              <h1 class="display-4 border bg-secondary text-light pl-2">specific work details</h1>
              <div class="container border rounded pt-2">
                        <form method="post"  action="{{ route('educationSpecificWorkSave')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="col-sm-3 control-label border">
                                  <label for="">upload image</label>
                                  <div class="col-sm-9 ml-2">
                                    <input required type="file" name="member_picture" />
                                    <label class="">Select a file to upload</label> <br>                               
                                  </div>
                                </div>
                                <br>
                                        <div class="form-group clearfix">
                                                <label class="col-sm-3 control-label">
                                                  Content & story for image
                                                </label>
                                                <div class="col-sm-9 ">
                                                  <textarea name="content" id="cnt1" class=" summernote "></textarea>
                                                </div>
                                        </div>
                                    <br>
                                      <div class="col-sm-12 padd">
                                        <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
                                      </div>
                        </form>
                    </div>
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