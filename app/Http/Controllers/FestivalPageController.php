<?php

namespace App\Http\Controllers;


use App\Models\Eventship;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FestivalPageController extends Controller
{
    
    public function index()
    {
        $festival = Eventship::with(["image"])->get();
        
        return view('festival',compact('festival'));
    }
    public function show(Eventship $festival)
    {
        return view('festivaldetail', compact('festival'));
    }
}
