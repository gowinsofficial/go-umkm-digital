<?php

namespace App\Http\Controllers;

use App\Models\MountSale;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Sales extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale = MountSale::all();;
        return view('admin.sale.indexSale', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.sale.createSale');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'sale']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        MountSale::create([
            'id_img' => $imageGroup->id_img,
            'kategori' => $request->kategori,
            'nama_produk' => $request->nama_produk,
            'harga_awal' => $request->harga_awal,
            'diskon' => $request->diskon,
            'detail' => $request->detail,
            //'detail' => $request->detail,
        ]);

        return redirect()->route('sale.index')->with('success', 'Berhasil menambahkan Sales');
    }

    /**
     * Display the specified resource.
     */
    public function show(MountSale $sale)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MountSale $sale)
    {
        $sale = MountSale::all();
        return view('admin.sale.editSale', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MountSale $sale)
    {
        $imageGroup = $sale->id_img;

        if ($request->file('image')) {
            $images = Images::find($sale->id_img);

            foreach ($images->imgdetail as $img) {
                Storage::delete($img->directory);
                $img->delete();
            }

            $imageGroup = $images->id_img;

            $image = $request->file('image');
            $path = $image->store('public/uploads');
            ImageDetail::create([
                'id_img' => $imageGroup,
                'directory' => $path,
                'filename' => $image->getClientOriginalName(),
            ]);
        }

        $sale->update([
            'id_img' => $imageGroup->id_img,
            'kategori' => $request->kategori,
            'nama_produk' => $request->nama_produk,
            'harga_awal' => $request->harga_awal,
            'diskon' => $request->diskon,
            'detail' => $request->detail,
        ]);

        return redirect()->route('sale.index')->with('success', 'Berhasil mengubah Sale');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MountSale $sale)
    {
        $images = Images::find($sale->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $sale->delete();

        return redirect()->route('sale.index')->with('success', 'Berhasil menghapus Sales');
    }
}
