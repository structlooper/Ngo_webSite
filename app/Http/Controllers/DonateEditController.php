<?php

namespace App\Http\Controllers;

use App\DonatePageData;
use Illuminate\Http\Request;

class DonateEditController extends Controller
{
    public function donateEdit(){
        return view('admin.donateEdit');
    }

    public function donateDataSave(request $request){

        $donate_page_data = new DonatePageData();
        $donate_page_data->heading = $request->input('heading');
        $donate_page_data->content = $request->input('content');

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
                $filename =  uniqid() . '.' . $extension;
                $file->move('uploades/donatePageImage', $filename);
                $donate_page_data->image = $filename;
                
            }
            else {
                return $request;
                $donate_page_data->image = '';
            }
            $donate_page_data->save();
            return redirect('/donateEdit');

    }
}
