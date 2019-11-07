<?php

namespace App\Http\Controllers;




use App\add_team_data;
use Illuminate\Http\Request;
use App\about_team_slide_data;

class AboutTeamEditController extends Controller
{
    public function index_1()
    {
        
        return view('admin.aboutEditTeam');
        
    }
    public function store_slide_data(Request $request)
    {
        $about_team_side_data = new about_team_slide_data();
        
        
        $about_team_side_data->slide_details = $request->input('slide_detail');
        
        if ($request->hasfile('slide_image')) {
            $file = $request->file('slide_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/aboutus/team/slideImage', $filename);
            $about_team_side_data->image = $filename;
            
        }
        
        else{
            
            return $request;
        }
        
        $about_team_side_data->save();
        
        return redirect('/aboutusEditTeam');
        
        
    }
    public function add_member_department(request $request)
    {
        
        $team_data = new add_team_data();
        if ($request->hasfile('member_picture')) {
            $file = $request->file('member_picture');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/aboutus/team/memberImage', $filename);
            $team_data->image = $filename;
            
            $team_data->department_name = $request->input('department_name');
            $team_data->member_name = $request->input('member_name');         
            $team_data->member_email = $request->input('member_email'); 
            $team_data->member_more_details = $request->input('member_more_details');
            $team_data->save();
            
            return redirect('/aboutusEditTeam');
            
        }
        else {
            return $request;
            $team_data->image = '';
        }
        
        
        
    }
    
}
