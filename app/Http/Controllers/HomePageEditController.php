<?php

namespace App\Http\Controllers;

use App\models\homeHealthSlide;
use App\models\homeAboutNgoData;
use App\models\homeSlide;
use App\models\homeCretingImpact;
use App\models\homeEducationSide;
use Illuminate\Http\Request;

class HomePageEditController extends Controller
{
    public function view()
    {
        return view('admin.homePageEdit');
    }
    
    function homeSlideSave(request $request)
    {
        $home_slide = new homeSlide();
        $home_slide->content = $request->input('content');

        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/HomePage/main_slide', $filename);
            $home_slide->image = $filename;
            
        }
        else {
            return $request;
           
        }
        $home_slide->save();
        return redirect('/homepageEdit')->with('status', 'Details Uploaded successfuly');
        
    }

    
    function homeAboutNgoDataSave(request $request)
    {
        $home_about_ngo_data = new homeAboutNgoData();
        $home_about_ngo_data->heading = $request->input('heading');
        $home_about_ngo_data->content = $request->input('content');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/HomePage/AboutNgoImage', $filename);
            $home_about_ngo_data->image = $filename;
            
        }
        else {
            return $request;
           
        }
        $home_about_ngo_data->save();
        return redirect('/homepageEdit')->with('status', 'Details Uploaded successfuly');
        
    }

    
    function homeEducationSlideSave(request $request)
    {
        $home_education_slide = new homeEducationSide();
        $home_education_slide->heading = $request->input('heading');
        $home_education_slide->content = $request->input('content');
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/HomePage/ourWork/EductionSlideImage', $filename);
            $home_education_slide->image = $filename;
            
        }
        else {
            return $request;
           
        }
        $home_education_slide->save();
        return redirect('/homepageEdit')->with('status', 'Details Uploaded successfuly');
    }

    
    function homeHealthSlideSave(request $request)
    {
        $home_health_slide = new homeHealthSlide();
        $home_health_slide->heading = $request->input('heading');
        $home_health_slide->content = $request->input('content');
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/HomePage/ourWork/HealthSlideImage', $filename);
            $home_health_slide->image = $filename;
            
        }
        else {
            return $request;
           
        }
        $home_health_slide->save();
        return redirect('/homepageEdit')->with('status', 'Details Uploaded successfuly');
    }

    
    function homeCretingImpactSave(request $request)
    {
        $home_creting_impact = new homeCretingImpact();
        $home_creting_impact->heading = $request->input('heading');
        $home_creting_impact->content = $request->input('content');
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/HomePage/CreatingImpact', $filename);
            $home_creting_impact->image = $filename;
            
        }
        else {
            return $request;
           
        }
        $home_creting_impact->save();
        return redirect('/homepageEdit')->with('status', 'Details Uploaded successfuly');

    }

    
}
