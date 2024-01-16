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
        if(request('batik') ||  request('category')){
           
        $batik = Batik::with(["menu", "image"])
        ->where(function ($query) {
        $query->where('nama', 'like', '%' . request('kuliner') . '%')
            ->whereHas('menu', function ($menuQuery) {
                $menuQuery->where('nama_menu', 'like', '%' . request('category') . '%');
            });
        })
    ->get();
            
         }
        return view('batik', compact('batik'));
    }
    public function show(Batik $batik)
    {
        return view('batikdetail', compact('batik'));
    }

}
