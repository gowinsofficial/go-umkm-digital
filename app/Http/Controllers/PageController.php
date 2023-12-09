<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dataIndex() {
        return view('pages.indexDosen');
    }
    public function formIndex() {
        return view('pages.tambahDosen');
    }
}
