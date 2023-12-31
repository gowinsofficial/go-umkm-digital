<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dataIndex() {
        return view('pages.indexUser');
    }
    public function formIndex() {
        return view('pages.tambahUser');
    }
}
