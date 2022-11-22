<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function RegPage(){
        return view('user.Registration');
    }

    public function AuthPage(){
        return view('user.auth');
    }
}
