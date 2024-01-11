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
        return view('maduratv', compact('maduratv'));
    }

}
