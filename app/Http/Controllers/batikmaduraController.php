<?php

namespace App\Http\Controllers;

use App\Models\batikmadura;
use Carbon\Carbon;
use Illuminate\Http\Request;



class batikmaduraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('batikmadura.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('batikmadura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request['created_at'] = Carbon::now();
        $request['updated_at']= Carbon::now();
        $request->validate([
            'id_menu' =>'required:batikmadura,id_menu',
            'id_img' => '3',
            'nama' => 'required|string:batikmadura,nama',
            'motif' => 'required|string:batikmadura,motif',
            'corak' => 'required|string:batikmadura,corak',
            'harga' => 'required|string:batikmadura,harga',
            'detail' => 'required|text:batikmadura,detail',
            'whatsapp_umkm' => 'required|string:batikmadura,whatsapp_umkm',
        ]);
        $batik = batikmadura::create($request->all());
        return ($batik);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('batikmadura.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
