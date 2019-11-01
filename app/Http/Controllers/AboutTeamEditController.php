<?php

namespace App\Http\Controllers;

use App\AboutEditTeamSlide;
use Illuminate\Http\Request;

class AboutTeamEditController extends Controller
{
    public function index_1()
    {
        
        return view('admin.aboutEditTeam');
        
    }
    public function store_slide_data(Request $request)
    {
        $about_team_side_data = new AboutEditTeamSlide();
        
        
        $about_team_side_data->slide_details = $request->input('slide_detail');
        
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/aboutus/team/slideImage', $filename);
            $about_team_side_data->image = $filename;
            
        }
        else {
            return $request;
            $about_team_side_data->image = '';
        }
        
        $about_team_side_data->save();
        
        return redirect('/aboutusEditTeam');
        
    }
}
