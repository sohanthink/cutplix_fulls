<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {   
        $setting = Setting::latest()->first();
        return view("frontend.page.home.home",compact('setting'));
    }

   
    public function portfolio()
    {
        return view('frontend.page.portfolio.index');
    }
    public function carrer()
    {
        return view('frontend.page.carrer.index',);
    }
    public function learn()
    {
        return view('frontend.page.learn.index',);
    }
    
}
