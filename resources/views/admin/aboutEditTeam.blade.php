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
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{session('status')}}
                    </div>
                    @endif

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
                            <input required type="text" class="heading-1-text form-control bg-light " placeholder="Heading  max : 100 char" maxlength="100"    name='slide_detail' >
                          </div>
                        </div>
                        <br>
                    <div class="col-sm-12 padd">
                      <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
                      </div>
            </form>
        </div>
        <br>
       
        <br>
        <div class="container border rounded pt-2">
            <form method="post"  action="{{ route('SaveDeaprtmentMember')}}" enctype="multipart/form-data" >
                    @csrf
                    <h2>Team Details</h2>
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="col-sm-3 control-label border">
                      <label for="">upload image</label>
                      <div class="col-sm-9 ml-2">
                        <input required type="file" name="member_picture" />
                        <label class="">Select a file to upload</label> <br>                               
                      </div>
                    </div>
                    <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Departmen name
                          </label>
                          <div class="col-sm-9">
                            {{-- <input required type="text" class="heading-1-text form-control bg-light " placeholder="Department Name"    name='department_name' > --}}
                            <select class="form-control bg-light" name="department_name" >
                              <option value="" selected>Select Department</option>
                                <option value="education">Education</option>
                                <option value="health">Health</option>
                                <option value="women_enpowerment">Women Enpowerment</option>
                              </select>
                          </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Name of member
                          </label>
                          <div class="col-sm-9">
                            <input required type="text" class="heading-1-text form-control bg-light " placeholder="Member Name" maxlength="20"    name='member_name' >
                          </div>
                        </div>
                        <br>
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            Email
                          </label>
                          <div class="col-sm-9">
                            <input required type="text" class="heading-1-text form-control bg-light " placeholder="Email"  name='member_email' >
                          </div>
                        </div>
                        <br>
                        
                        <div class="form-group clearfix">
                          <label class="col-sm-3 control-label ">
                            More details
                          </label>
                          <div class="col-sm-9">
                            <input required type="text" class="heading-1-text form-control bg-light " placeholder="Optional"  name="member_more_details" >
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