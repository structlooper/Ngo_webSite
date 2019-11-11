<?php

namespace App\Http\Controllers;

use App\womenSlide;
use App\healthSlide;
use App\womenSideData;
use App\educationSlide;
use App\healthSideData;
use App\educationSideData;
use App\womenSpecificWork;
use App\healthSpecificWork;
use Illuminate\Http\Request;
use App\educationSpecificWork;

class OurWorkController extends Controller
{
   
    public function education(){
        $datas = educationSlide::all();
        $sideDatas = educationSideData::all();
        $specificDatas = educationSpecificWork::all();
        return view('ourworks.education')->with('datas',$datas)->with('sideDatas',$sideDatas)->with('specificDatas',$specificDatas);
     }
    public function health(){
        $slideDatas = healthSlide::all();
        $sideDatas = healthSideData::all();
        $specificDatas = healthSpecificWork::all();


        return view('ourworks.health')->with('slideDatas',$slideDatas)->with('sideDatas',$sideDatas)->with('specificDatas',$specificDatas);
     }
    public function women(){
        $slideDatas = womenSlide::all();
        $sideDatas = womenSideData::all();
        $specificDatas = womenSpecificWork::all();
        return view('ourworks.womenEnpowerment')->with('slideDatas',$slideDatas)->with('sideDatas',$sideDatas)->with('specificDatas',$specificDatas);
     }
   

}
