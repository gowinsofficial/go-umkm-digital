<?php

namespace App\Http\Controllers;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Kuliner;
use App\Models\Menu;
use Illuminate\Http\Request;

class KulinerPageController extends Controller
{
    public function index()
    {
        $kuliner = Kuliner::with(["menu", "image"])->get();
        
        return view('makanan',compact('kuliner'));
    }
    public function show(Kuliner $kuliner)
    {
        return view('detailmakanan', compact('kuliner'));
    }

}
