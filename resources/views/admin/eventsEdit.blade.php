@extends('layouts.master')

@section('title_das_str')
        Events Details Upload
    
@endsection

@section('content')
     <div class="container">
                <h1 class="display-4 border bg-secondary text-light pl-2">Current Events Detail Upload</h1>
                <div class="container border rounded pt-2">
                    <form method="post"  action="{{ route('eventSlideDataSave')}}" enctype="multipart/form-data" >
                            @csrf
                            <h2>Current Events</h2>
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
                                    Details
                                  </label>
                                  <div class="col-sm-9">
                                    <textarea name="content" id="cnt1" class=" summernote " ></textarea>
                                  </div>
                                </div>
                                <br>
                            <div class="col-sm-12 padd">
                              <input type="submit" value="Save Now" class="btn btn-warning btn-lg" >
                              </div>
                    </form>
                </div>
                <br><br>
                <h1 class="display-4 border bg-secondary text-light pl-2">Upcoming Events Detail Upload</h1>            
                
                <div class="container border rounded pt-2">
                  <form method="post"  action="{{ route('eventUpcomingDataSave')}}" enctype="multipart/form-data" >
                          @csrf
                          <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                              Event Name
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class="heading-1-text form-control bg-light " placeholder="Event Name" maxlength="100"    name="event_name" >
                            </div>
                          </div>
                          <br>
                          <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                              Event Details 
                            </label>
                            <div class="col-sm-9">
                                    <textarea name="event_details" id="cnt1" class=" summernote " ></textarea>
                                </div><span id="total-caracteres"></span>
                          </div>
                          <br>
                              <div class="form-group clearfix">
                                <label class="col-sm-3 control-label ">
                                  Place
                                </label>
                                <div class="col-sm-9">
                                  <input required type="text" class="heading-1-text form-control bg-light " placeholder="Enter place and & Address" maxlength="50"    name="place" >
                                </div>
                              </div>
                              
                              <br>
                                  <div class="form-group clearfix">
                                      <label class="col-sm-3 control-label ">Duration 
                                      <h6 class="pt-2">From</h6>
                                      </label>
                                      <div class="col-sm-9 ">
                                            <input required type="date" id="myDate" name='duration_start' class=" bg-light form-control">
                                           
                                      </div>
                                  </div>
                          
                                  <div class="form-group clearfix">
                                      <label class="col-sm-3 control-label ">
                                      <h6>to</h6>
                                      </label>
                                      <div class="col-sm-9">
                                            <input required type="date" id="myDate" name='duration_end' class=" bg-light form-control" >
                                           
                                      </div>
                                  </div>
                          
                                  <br>
                          <div class="col-sm-12 padd">
                              <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  id="tplx-donation-btn">
                            </div>
                  </form>
                </div><br><br>
                <h1 class="display-4 border bg-secondary text-light pl-2">Event History Details Upload</h1>            
                <div class="container border rounded pt-2">
                  <form method="post"  action="{{ route('eventHistoryDataSave')}}" enctype="multipart/form-data" >
                          @csrf
                          <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                              Event Name
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class="heading-1-text form-control bg-light " placeholder="Event Name" maxlength="100"    name="event_name" >
                            </div>
                          </div>
                          <br>
                          <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                              Event Details 
                            </label>
                            <div class="col-sm-9">
                                    <textarea name="event_details" id="cnt1" class=" summernote " ></textarea>
                              </div><span id="total-caracteres"></span>
                          </div>
                          <br>
                              <div class="form-group clearfix">
                                <label class="col-sm-3 control-label ">
                                  Place
                                </label>
                                <div class="col-sm-9">
                                  <input required type="text" class="heading-1-text form-control bg-light " placeholder="Enter place and & Address" maxlength="50"    name="place" >
                                </div>
                              </div>
                              
                              <br>
                                  <div class="form-group clearfix">
                                      <label class="col-sm-3 control-label ">Duration
                                      <h6 class="pt-2">From</h6>
                                      </label>
                                      <div class="col-sm-9 ">
                                            <input required type="date" id="myDate" name='duration_start' class=" bg-light form-control">
                                           
                                      </div>
                                  </div>
                          
                                  <div class="form-group clearfix">
                                      <label class="col-sm-3 control-label ">
                                      <h6>to</h6>
                                      </label>
                                      <div class="col-sm-9">
                                            <input required type="date" id="myDate" name='duration_end' class=" bg-light form-control" >
                                           
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

      function registerSummernote(element, placeholder, max, callbackMax) {
        $(element).summernote({
          toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']]
          ],
          placeholder,
          callbacks: {
            onKeydown: function(e) {
              var t = e.currentTarget.innerText;
              if (t.trim().length >= max) {
                //delete key
                if (e.keyCode != 8)
                  e.preventDefault();
                // add other keys ...
              }
            },
            onKeyup: function(e) {
              var t = e.currentTarget.innerText;
              if (typeof callbackMax == 'function') {
                callbackMax(max - t.trim().length);
              }
            },
            onPaste: function(e) {
              var t = e.currentTarget.innerText;
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              var all = t + bufferText;
              document.execCommand('insertText', false, all.trim().substring(0, 400));
              if (typeof callbackMax == 'function') {
                callbackMax(max - t.length);
              }
            }
          }
        });
      }


      $(function(){
      registerSummernote('.summernote', 'Leave a comment', 400, function(max) {
        $('#maxContentPost').text(max)
      });
      });
        

               
               
  </script>
  
@endsection