<?php

namespace App\Http\Controllers;

use App\Models\Recpie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=Recpie::get();

        if(Auth()->user()->type === 'admin')
        {

        return view('dashboard', compact('data'));
        }
        else{
            return view('afterloginpage.index', compact('data'));
        }
        // return view('home');
       
         
    }
}
