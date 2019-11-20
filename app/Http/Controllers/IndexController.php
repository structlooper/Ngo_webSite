<?php

namespace App\Http\Controllers;

use App\models\DonatePageData;
use App\models\homeHealthSlide;
use App\models\homeAboutNgoData;
use App\models\homeSlide;
use App\models\homeCretingImpact;
use App\models\homeEducationSide;
use App\models\NgoContactDetails;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $home_slide_datas = homeSlide::all();
        $home_about_ngo_datas = homeAboutNgoData::all();
        $home_education_slide_datas= homeEducationSide::all();
        $home_health_slide_datas = homeHealthSlide::all();
        $home_creating_impact_datas = homeCretingImpact::all();

        return view('index.index')->with('home_slide_datas',$home_slide_datas)->with('home_about_ngo_datas',$home_about_ngo_datas)->with('home_education_slide_datas',$home_education_slide_datas)->with('home_health_slide_datas',$home_health_slide_datas)->with('home_creating_impact_datas',$home_creating_impact_datas);

}


    public function contact(){
        $ngo_contact_details = NgoContactDetails::all();
        return view('index.contact')->with('ngo_contact_details',$ngo_contact_details);
    }

    public function donate(){
        $DonatePageDatas = DonatePageData::all();
        return view('index.donate')->with('DonatePageDatas',$DonatePageDatas);
    }


}
?>
