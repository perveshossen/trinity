<?php

namespace App\Http\Controllers;

use App\Contact_box;
use App\Getaway_video;
use App\Getway_slider;
use App\Histroy_banner;
use App\Home_banner;
use App\Home_video;
use App\Insider;
use App\Interview_story;
use App\Join_community;
use App\Logo;
use App\Memoriae_two;
use App\Memory;
use App\Movement;
use App\Publication_banner;
use App\Service_banner;
use App\Service_detail;
use App\Service_more_banner;
use App\Shop_Category;
use App\Signup_latter;
use App\Social;
use App\Still_banner;
use App\Still_banner_two;
use App\Still_focus;
use App\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        return view('frontend.index', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'banners' => Home_banner::latest()->get(),
            'presentation' => Home_video::find(1),
            'movements' => Movement::latest()->get(),
        ]);
    }
    public function history()
    {
        return view('frontend.history', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'his_banner' => Histroy_banner::find(1),
            'movements' => Movement::latest()->get(),
        ]);
    }
    public function publication()
    {
        return view('frontend.publication', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'banner' => Publication_banner::find(1),
            'story' => Interview_story::find(1),
            'categories' => Shop_Category::latest()->get(),
            'testimonials' => Testimonial::latest()->get(),
            'movements' => Movement::latest()->get(),
            'memoriaes' => Memory::all(),
        ]);
    }
    public function still()
    {
        return view('frontend.still', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'still_banner' => Still_banner::find(1), 
            'still_banner_two' => Still_banner_two::find(1),
            'story' => Interview_story::find(1),
            'movements' => Movement::latest()->get(),
            'focus' => Still_focus::find(1)
        ]);
    }
    public function service()
    {
        return view('frontend.service', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'service_banner' => Service_banner::find(1),
            'service_detail' => Service_detail::find(1),
            'banners' => Service_more_banner::latest()->get(),
            'movements' => Movement::latest()->get(),
        ]);
    }
    public function shop()
    {
        return view('frontend.shop', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'categories' => Shop_Category::latest()->get(),
            'movements' => Movement::latest()->get(),
            'memoriaes' => Memoriae_two::get()->all()
        ]);
    }
    public function insider()
    {
        return view('frontend.insider', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'video' => Home_video::find(1),
            'movements' => Movement::latest()->get(),
            'insiders' => Insider::all(),
        ]);
    }
    public function gateway()
    {
        return view('frontend.getway', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'sliders' => Getway_slider::latest()->get(),
            'movements' => Movement::latest()->get(),
            'gateway_video' => Getaway_video::find(1)
        ]);
    }
    public function contact()
    {
        return view('frontend.contact', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'boxes' => Contact_box::latest()->get(),
            'movements' => Movement::latest()->get(),
        ]);
    }
    public function historydetails()
    {
        return view('frontend.history_detail', [
            'logo' => Logo::find(1),
            'socials' => Social::latest()->get(),
            'movements' => Movement::latest()->get(),
        ]);
    }
    public function signupletter(Request $request){
        Signup_latter::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('send_newsletter', 'Your sign up is successfully!');
    }
    public function joinourcommunity(Request $request) {
        Join_community::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('join_community', 'Welcome our community!');
    }

}
