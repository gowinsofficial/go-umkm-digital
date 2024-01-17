<?php

namespace App\Http\Controllers;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomePageController extends Controller
{
    // public function index()
    public function index()
    {
        $sliders = SliderImage::all(); 
        return view('home', compact('sliders'));
    }
    public function about()
    {
        $sliders = SliderImage::all(); 
        return view('about', compact('sliders'));
    }
}
