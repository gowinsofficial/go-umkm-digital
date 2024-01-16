<?php


namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MaduraTvPageController extends Controller
{
    //
    public function index()
    {
        $maduratv = MaduraTv::with(["menu", "image"])->get();
        if(request('tv') ||  request('category')){
           
            $maduratv = MaduraTv::with(["menu", "image"])
            ->where(function($query) {
                $query->where('kategori', 'like', '%' . request('category') . '%')
                      ->where('nama', 'like', '%' . request('kuliner') . '%');
            })
            ->get();
                
             }
        return view('maduratv', compact('maduratv'));
    }

}
