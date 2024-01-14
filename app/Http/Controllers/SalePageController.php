<?php

namespace App\Http\Controllers;


use App\Models\MountSale;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SalePageController extends Controller
{
    public function index()
    {
        $sale = MountSale::with(["image"])->get();
        
        return view('sale',compact('sale'));
    }
    public function show(MountSale $sale)
    {
        return view('saledetail', compact('sale'));
    }  
}
