<?php

namespace App\Http\Controllers;


use App\educationSlide;
use App\educationSideData;
use Illuminate\Http\Request;
use App\educationSpecificWork;

class OurWorkEditController extends Controller
{
    
    public function Education(){
        return view('admin.ourWorkEducationEdit');
    }
    
    function educationSlideSave(request $request){
        
        $education_slide = new educationSlide();

        $education_slide->content = $request->input('content'); //maked exception
        
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/ourWork/education/slideImage', $filename);
            $education_slide->image = $filename;
            
        }
        else {
            return $request;
            $education_slide->image = '';
        }
        
        $education_slide->save();
        
        return redirect('/ourWorksEducationEdit');


    }
    
    function educationSideDataSave(request $request){
        
        $education_side_data = new educationSideData();
        
        $education_side_data->heading = $request->input('heading'); //marked exception
        $education_side_data->content = $request->input('content'); //marked exception

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/ourWork/education/sideContentImage', $filename);
            $education_side_data->image = $filename;
            
        }
        else {
            return $request;
            $education_side_data->image = '';
        }
        
        $education_side_data->save();
        
        return redirect('/ourWorksEducationEdit');

       
    }
    
    
    function educationSpecificWorkSave(request $request){
        
        $education_specific_work = new educationSpecificWork();

        $education_specific_work->content = $request->input('content'); //marked exception
        if ($request->hasfile('member_picture')) {
            $file = $request->file('member_picture');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/ourWork/education/specificWorkImage', $filename);
            $education_specific_work->image = $filename;
            
        }
        else {
            return $request;
            $education_specific_work->image = '';
        }
        
        $education_specific_work->save();
        
        return redirect('/ourWorksEducationEdit');




    }
    
    
    
    public function Health(){
        return view('admin.ourWorkhealthEdit');
    }
    
    public function healthSlideSave(request $request){
        return $request;
    }
    public function healthSideDataSave(request $request){
        return $request;
    }
    public function healthSpecificWorkSave(request $request){
        return $request;
    }
}
