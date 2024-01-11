<?php

namespace App\Http\Controllers;
use App\Models\Batik;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BatikPageController extends Controller
{
    public function index()
    {
        $batik = Batik::with(["menu", "image"])->get();
        return view('batik', compact('batik'));
    }
    public function show(Batik $batik)
    {
        return view('batikdetail', compact('batik'));
    }

}
