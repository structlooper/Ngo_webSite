<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\AboutEditWhoWeAre;

class AboutEditWhoWeAreController extends Controller
{
    public function index()
    {
        
        return view('admin.aboutEdit');
        
    }
    
    public function store(Request $request)
    {
        $who_we_are = new AboutEditWhoWeAre();
        
        
        $who_we_are->heading = $request->input('heading');
        $who_we_are->content = $request->input('content');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/aboutus/who_we_are/', $filename);
            $who_we_are->image = $filename;
            
        }
       
        else{
            return $request;
        }
        
        $who_we_are->save();

        return redirect('/aboutusEdit')->with('status', 'Details Uploaded successfuly');
        
    }
    

}
