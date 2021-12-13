<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        return view('frontend.index');
    }
    public function history()
    {
        return view('frontend.history');
    }
    public function publication()
    {
        return view('frontend.publication');
    }
    public function still()
    {
        return view('frontend.still');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function insider()
    {
        return view('frontend.insider');
    }
    public function gateway()
    {
        return view('frontend.getway');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function historydetails()
    {
        return view('frontend.history_detail');
    }
}
