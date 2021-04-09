<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->hasRole('user')){
            return view('user.dashboard');
        }elseif(Auth::user()->hasRole('manager')){
            return view('manager.dashboard');
        }elseif(Auth::user()->hasRole('superadministrator')){
            return view('admin.dashboard');
        }
        return view('welcome');
    }

    public function profile(){
        return view('myprofile');
    }

   
}
