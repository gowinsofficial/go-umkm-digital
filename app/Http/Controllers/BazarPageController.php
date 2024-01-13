<?php

namespace App\Http\Controllers;
use App\Models\Bazar;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BazarPageController extends Controller
{
    //
    public function index()
    {
        $bazar = Bazar::with(["image"])->get();
        
        return view('bazar',compact('bazar'));
    }
    public function show(Bazar $bazar)
    {
        return view('bazardetail', compact('bazar'));
    }
}
