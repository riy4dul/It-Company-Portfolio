<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\backend\slider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // return view('welcome');

        $sliders=Slider::take(1)->orderBy('id','DESC')->get();
        // $categories = Category::all();
        // $items = Item::all();
        return view('frontend.welcome',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.about');
    }

    public function solutions()
    {
        return view('frontend.solutions');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy-policy');
    }
    
}
