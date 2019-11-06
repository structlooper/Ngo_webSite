<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurWorkEditController extends Controller
{
    public function Education(){
        return view('admin.ourWorkEducationEdit');
    }
    public function Health(){
        return view('admin.ourWorkhealthEdit');
    }
}
