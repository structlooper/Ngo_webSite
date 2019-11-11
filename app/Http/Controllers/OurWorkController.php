<?php

namespace App\Http\Controllers;

use App\educationSlide;
use App\educationSideData;
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
        return view('ourworks.health');
     }
    public function women(){
        return view('ourworks.womenEnpowerment');
     }
   

}
