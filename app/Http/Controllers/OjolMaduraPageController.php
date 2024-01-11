<?php

namespace App\Http\Controllers;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use App\Models\Ojol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OjolMaduraPageController extends Controller
{
    public function index()
    {
        $ojolmadura = Ojol::with(["menu", "image"])->get();
        return view('ojolmadura', compact('ojolmadura'));
    }
}
