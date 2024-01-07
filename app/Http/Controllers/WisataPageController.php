<?php

namespace App\Http\Controllers;


use App\Models\Batik;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use App\Models\Pariwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WisataPageController extends Controller
{
    //
    public function index()
    {
        $pariwisata = Pariwisata::with(["menu", "image"])->get();
        return view('wisata', compact('pariwisata'));
    }
    public function show(Pariwisata $pariwisatum)
    {
        return view('wisatadetail', compact('pariwisatum'));
    }
}
