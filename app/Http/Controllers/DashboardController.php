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
    public function profilesEdit(request $request ,$id)
    {
        $users = User::findOrFail($id);
        return view('admin.adminProfilesEdit')->with('users',$users);
    }
    public function profilesUpdate(request $request , $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->email = $request->input('email');
        $users->update();

        return  \redirect('profiles')->with('status', 'Details Updated successfuly');
    }
    public function profileDelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return  \redirect('profiles')->with('status', 'Profile deleted!!');

    }
    
}
