<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\add_team_data;
use App\models\AboutEditWhoWeAre;
use App\models\about_team_slide_data;


class AboutController extends Controller
{
    public function about_us(){
        $datas = AboutEditWhoWeAre::all();
        return view('about.about_us')->with('datas',$datas);

    }
   

    public function team(){
        $datas = about_team_slide_data::all();
        $memberDatas = add_team_data::all();
        return view('about.team')->with('datas',$datas )->with( 'memberDatas' , $memberDatas);
    }
    
    
}
