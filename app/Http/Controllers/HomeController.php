<?php

namespace App\Http\Controllers;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        $sliders = SliderImage::all(); 
        return view('home', compact('sliders'));
    }
}
