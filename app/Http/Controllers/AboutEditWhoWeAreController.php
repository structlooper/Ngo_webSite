<?php

namespace App\Http\Controllers;


use App\AboutEditWhoWeAre;
use Illuminate\Http\Request;

class AboutEditWhoWeAreController extends Controller
{
    public function index()
    {
        
        return view('admin.aboutEdit');
        
    }

    public function store(Request $request)
    {
        $who_we_are = new AboutEditWhoWeAre();
        // print_r($request->file());

        $who_we_are->heading = $request->input('heading');
        $who_we_are->content = $request->input('content');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            // $path = $request->file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  time() . '.' . $extension;
            $file->move('uploades/aboutus/who_we_are/', $filename);
            $who_we_are->image = $filename;
        
        }
        else {
            return $request;
            $who_we_are->image = '';
        }

        $who_we_are->save();
        
        return view('admin.aboutEdit')->with('who_we_are',$who_we_are);
            // print_r($request->$file());
    }
}
