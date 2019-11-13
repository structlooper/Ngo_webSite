<?php

namespace App\Http\Controllers;

use App\homeSlide;
use App\DonatePageData;
use App\homeHealthSlide;
use App\homeAboutNgoData;
use App\homeEducationSide;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $home_slide_datas = homeSlide::all();
        $home_about_ngo_datas = homeAboutNgoData::all();
        $home_education_slide_datas= homeEducationSide::all();
        $home_health_slide_datas = homeHealthSlide::all();

        return view('index.index')->with('home_slide_datas',$home_slide_datas)->with('home_about_ngo_datas',$home_about_ngo_datas)->with('home_education_slide_datas',$home_education_slide_datas)->with('home_health_slide_datas',$home_health_slide_datas);
}


    public function contact(){
        return view('index.contact');
    }

    public function donate(){
        $DonatePageDatas = DonatePageData::all();
        return view('index.donate')->with('DonatePageDatas',$DonatePageDatas);
    }


}
?>
