<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use auth;

class profileController extends Controller
{
    public function profile(){
    return view('profile', array('user' => Auth::user));
    }
}
