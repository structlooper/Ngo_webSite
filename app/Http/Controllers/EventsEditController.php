<?php

namespace App\Http\Controllers;

use App\models\eventHistoryData;
use App\models\eventUpcomingData;
use Illuminate\Http\Request;
use App\models\eventSlideData;

class EventsEditController extends Controller
{
    public function events(){
        return view('admin.eventsEdit');
    }
        function eventSlideDataSave(request $request){

            $eventSlideData = new eventSlideData();

            $eventSlideData->content = $request->input('content');

            if ($request->hasfile('slide_image')) {
                $file = $request->file('slide_image');
                $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
                $filename =  uniqid() . '.' . $extension;
                $file->move('uploades/events/current_event_slide/', $filename);
                $eventSlideData->image = $filename;
                
            }
            else {
                return $request;
            }
            $eventSlideData->save();
            return redirect('/eventsEdit')->with('status', 'Details Uploaded successfuly');
        }

        function eventUpcomingDataSave(request $request){
            $event_upcoming_data = new eventUpcomingData();
            if ($event_upcoming_data->event_name = $request->input('event_name') and
            $event_upcoming_data->event_details = $request->input('event_details') and
            $event_upcoming_data->place = $request->input('place') and
            $event_upcoming_data->duration_start = $request->input('duration_start')
            ) 
            {   
                $event_upcoming_data->event_name = $request->input('event_name') ;
                $event_upcoming_data->event_details = $request->input('event_details') ;
                $event_upcoming_data->place = $request->input('place') ;
                $event_upcoming_data->duration_start = $request->input('duration_start');
                $event_upcoming_data->duration_end = $request->input('duration_end') ? $request->duration_end : '';
                $event_upcoming_data->save();
                
                return redirect('/eventsEdit')->with('status', 'Details Uploaded successfuly');
            }
            else{
                return $request;
            }

            
        }
        
        
        function eventHistoryDataSave(request $request){
            $event_history_data = new eventHistoryData();
            if ($event_history_data->event_name = $request->input('event_name') and
            $event_history_data->event_details = $request->input('event_details') and
            $event_history_data->place = $request->input('place') and
            $event_history_data->duration_start = $request->input('duration_start')
            ) 
            {   
                $event_history_data->event_name = $request->input('event_name') ;
                $event_history_data->event_details = $request->input('event_details') ;
                $event_history_data->place = $request->input('place') ;
                $event_history_data->duration_start = $request->input('duration_start');
                $event_history_data->duration_end = $request->input('duration_end') ? $request->duration_end : '';
                $event_history_data->save();
                
                return redirect('/eventsEdit')->with('status', 'Details Uploaded successfuly');
            }
            else{
                return $request;
            }
        }
}
