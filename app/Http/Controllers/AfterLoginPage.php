<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AfterLoginPage extends Controller
{
    public function afterloginpage()
    {
        if(!Auth()->user())
        {
            return view('auth.login');
        }
        else
        {
            return view('afterloginpage.index');
        }
    }
}
