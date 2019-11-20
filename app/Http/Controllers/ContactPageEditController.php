<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\NgoContactDetails;

class ContactPageEditController extends Controller
{
    public function contact()
    {
        return view('admin.contactPageEdit');
    }
    function contactDetailsSave(request $request)
    {
        $ngo_contact_details = new NgoContactDetails();
        $ngo_contact_details->address = $request->input('address');
        $ngo_contact_details->number = $request->input('number'); //marked exception
        $ngo_contact_details->email = $request->input('email');

        $ngo_contact_details->save();
        return \redirect('/contactPageEdit')->with('status', 'Details Uploaded successfuly');

    }
}
