<?php

namespace App\Http\Controllers;

use App\eventSlideData;
use App\eventHistoryData;
use App\eventUpcomingData;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $datas = eventSlideData::all();
        $upcomingDatas = eventUpcomingData::all();
        $historyDatas = eventHistoryData::all();
       return view('index.events')->with('datas',$datas )->with('upcomingDatas',$upcomingDatas)->with('historyDatas', $historyDatas);
    }
    

}
