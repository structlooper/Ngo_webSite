<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function profiles()
    {
        $user = User::all();
        return view('admin.adminProfile')->with('users',$user);
        
    }
    public function aboutUs()
    {
        $user = User::all();
        return view('admin.aboutEdit');
        
    }
}
