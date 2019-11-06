<?php

namespace App\Http\Controllers;


use App\healthSlide;
use App\educationSlide;
use App\healthSideData;
use App\educationSideData;
use App\healthSpecificWork;
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
    
    
        function healthSlideSave(request $request){
            

            $health_slide = new healthSlide();

            $health_slide->content = $request->input('content'); //maked exception
            
            if ($request->hasfile('slide_image')) {
                $file = $request->file('slide_image');
                $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
                $filename =  uniqid() . '.' . $extension;
                $file->move('uploades/ourWork/health/slideImage', $filename);
                $health_slide->image = $filename;
                
            }
            else {
                return $request;
                $health_slide->image = '';
            }
            
            $health_slide->save();
            
            return redirect('/ourWorksHealthEdit');
        }
        function healthSideDataSave(request $request){
            $health_side_data_save = new healthSideData();
            
            $health_side_data_save->heading = $request->input('heading'); //marked exception
            $health_side_data_save->content = $request->input('content'); //marked exception

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
                $filename =  uniqid() . '.' . $extension;
                $file->move('uploades/ourWork/education/sideContentImage', $filename);
                $health_side_data_save->image = $filename;
                
            }
            else {
                return $request;
                $health_side_data_save->image = '';
            }
            
            $health_side_data_save->save();
            
            return redirect('/ourWorksHealthEdit');
        }
        function healthSpecificWorkSave(request $request){

            $health_specific_work_save = new healthSpecificWork();

            $health_specific_work_save->content = $request->input('content'); //marked exception
            if ($request->hasfile('member_picture')) {
                $file = $request->file('member_picture');
                $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
                $filename =  uniqid() . '.' . $extension;
                $file->move('uploades/ourWork/education/specificWorkImage', $filename);
                $health_specific_work_save->image = $filename;
                
            }
            else {
                return $request;
                $health_specific_work_save->image = '';
            }
            
            $health_specific_work_save->save();
            
            return redirect('/ourWorksHealthEdit');
        }
}
