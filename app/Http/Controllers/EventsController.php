<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\eventSlideData;
use App\models\eventHistoryData;
use App\models\eventUpcomingData;

class EventsController extends Controller
{
    public function index(){
        $datas = eventSlideData::all();
        $upcomingDatas = eventUpcomingData::all();
        $historyDatas = eventHistoryData::all();
       return view('index.events')->with('datas',$datas )->with('upcomingDatas',$upcomingDatas)->with('historyDatas', $historyDatas);
    }
    

}
