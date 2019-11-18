@extends('layouts.master')

@section('title_das_str')
        Dashboard
    
@endsection

@section('content')
        <div class="Content">
                <h1 class="display-4 border bg-secondary text-light pl-2">NGO Contact Details Upload</h1>
                <div class="container border rounded pt-2">
                  <form method="post"  action="{{ route('contactDetailsSave')}}" enctype="multipart/form-data" >
                          @csrf
                          <br>
                          <div class="form-group clearfix">
                            <label class="col-sm-3 control-label">
                              <h4>NGO ADDRESS</h4> 
                            </label>
                            <div class="col-sm-9 ">
                              <textarea name="address" id="cnt1" class=" summernote "></textarea>
                            </div>
                          </div>
                          <br>
                          <div class="form-group clearfix">
                                <label class="col-sm-3 control-label ">
                                        <h4>NGO PHONE NUMBER</h4> 
                                </label>
                                <div class="col-sm-9">
                                  <input required type="number" class=" form-control bg-light "  maxlength="10"    name="number" >
                                </div>
                              </div>
                          <br>
                          <div class="form-group clearfix">
                                <label class="col-sm-3 control-label ">
                                 <h4> NGO MAIL ADDRESS</h4> 
                                </label>
                                <div class="col-sm-9">
                                  <input required type="email" class="email-1-text form-control bg-light "  maxlength="25"    name="email" >
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
        document.execCommand('insertText', false, all.trim().substring(0, 200));
        if (typeof callbackMax == 'function') {
          callbackMax(max - t.length);
        }
      }
    }
  });
}


$(function(){
registerSummernote('.summernote', 'Leave a comment', 200, function(max) {
  $('#maxContentPost').text(max)
});
}); 
     
</script>
    
@endsection