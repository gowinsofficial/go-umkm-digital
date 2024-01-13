<?php

namespace App\Http\Controllers;
use App\Models\PostArticles;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArtikelPageController extends Controller
{
    public function index()
    {
        $artikel = PostArticles::with(["image"])->get();
        
        return view('artikel',compact('artikel'));
    }
    public function show(PostArticles $artikel)
    {
        return view('artikeldetail', compact('artikel'));
    }
}
