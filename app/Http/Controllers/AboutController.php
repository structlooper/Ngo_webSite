<?php

namespace App\Http\Controllers;

use App\AboutEditWhoWeAre;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function about_us(){
        $datas = AboutEditWhoWeAre::all();
        return view('about.about_us')->with('datas',$datas);

    }
   

    public function team(){
        return view('about.team');
    }
    
    
}
?>