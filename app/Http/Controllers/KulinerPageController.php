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
         if(request('kuliner') ||  request('category')){
           
            $kuliner = Kuliner::with(["menu", "image"])
            ->where(function($query) {
                $query->where('kategori', 'like', '%' . request('category') . '%')
                      ->where('nama', 'like', '%' . request('kuliner') . '%');
            })
            ->get();
            
         }
         
        return view('makanan',compact('kuliner'));
    }
    public function show(Kuliner $kuliner)
    {
        return view('detailmakanan', compact('kuliner'));
    }

}
