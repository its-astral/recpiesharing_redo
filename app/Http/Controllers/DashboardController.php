<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth()->user()->type === 'admin')
        {
        return view('dashboard');
        }
        else{
            return view('afterloginpage.index');
        }
    }
    public function acesscontrol()
    {
        
    }

    public function user()
    {
        

    }
}
