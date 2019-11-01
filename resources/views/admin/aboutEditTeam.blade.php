@extends('layouts.master')

@section('title_das_str')
        about site
    
@endsection

@section('content')
   
      <div class="container">
       
        <h1 class="display-4 border bg-secondary text-light pl-2">Team | Departments : {portion}</h1>
        <div class="container border rounded pt-2">
            <form method="post"  action="{{ route('SaveData')}}" enctype="multipart/form-data" >
                    @csrf
                    <h2>Slide Details upload</h2>
                    <div class="col-sm-3 control-label border">
                      <label for="">upload image</label>
                      <div class="col-sm-9 ml-2">
                        <input type="file" name="slide_image" />
                        <label class="">Select a file to upload</label> <br>                               
                      </div>
                    </div>
                    <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Slide image details
                          </label>
                          <div class="col-sm-9">
                            <input type="text" class="heading-1-text form-control bg-light " placeholder="Heading  max : 100 char" maxlength="100"    name='slide_detail' >
                          </div>
                        </div>
                        <br>
                    <div class="col-sm-12 padd">
                      <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
                      </div>
            </form>
        </div>
        <br>
        <div class="container border rounded pt-2">
            <form method="post"  action="{{ route('aboutSave')}}" enctype="multipart/form-data" >
              @csrf
              <h2>Add new department</h2>
             
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                      Department Name
                    </label>
                    <div class="col-sm-9">
                      <input type="text" class="heading-1-text form-control bg-light " placeholder="Heading  max : 100 char" maxlength="100"    name='new_department_name' >
                    </div>
                  </div>
                  <br>
                    <div class="col-sm-12 padd">
                      <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
                    </div>
            </form>
        </div>
        <br>
        <div class="container border rounded pt-2">
            <form method="post"  action="{{ route('aboutSave')}}" enctype="multipart/form-data" >
                    @csrf
                    <h2>Add members in existing department</h2>
                    <div class="col-sm-3 control-label border">
                      <label for="">upload image</label>
                      <div class="col-sm-9 ml-2">
                        <input type="file" name="slide_image" />
                        <label class="">Select a file to upload</label> <br>                               
                      </div>
                    </div>
                    <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Departmen name
                          </label>
                          <div class="col-sm-9">
                            <input type="text" class="heading-1-text form-control bg-light " placeholder="Department Name"    name='department_name' >
                          </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Name of member
                          </label>
                          <div class="col-sm-9">
                            <input type="text" class="heading-1-text form-control bg-light " placeholder="Member Name" maxlength="20"    name='member_name' >
                          </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Email
                          </label>
                          <div class="col-sm-9">
                            <input type="text" class="heading-1-text form-control bg-light " placeholder="Email"  name='member_email' >
                          </div>
                        </div>
                        <br>
                        
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            More details
                          </label>
                          <div class="col-sm-9">
                            <input type="text" class="heading-1-text form-control bg-light " placeholder="Optional"  name="member_more_details" >
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

@endsection