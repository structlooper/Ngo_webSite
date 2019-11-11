<?php

namespace App\Http\Controllers;

use App\DonatePageData;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
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
