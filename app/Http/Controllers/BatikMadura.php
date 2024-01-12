<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BatikMadura extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batik = Batik::with(["menu", "image"])->get();
        return view('admin.batikmadura.indexBatik', compact('batik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "batik-madura")->get();
        return view('admin.batikmadura.createBatik', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'batik-madura']);

        foreach ($request->file('images') as $image) {
            $path = $image->store('public/uploads');
            ImageDetail::create([
                'id_img' => $imageGroup->id_img,
                'directory' => $path,
                'filename' => $image->getClientOriginalName(),
            ]);
        }

        Batik::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'nama' => $request->nama,
            'motif' => $request->motif,
            'corak' => $request->corak,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'maps' => $request->maps,
            'detail' => $request->detail,
            'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('batik.index')->with('success', 'Berhasil menambahkan batik madura');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batik $batik)
    {
        return view('admin.batikmadura.detailBatik', compact('batik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batik $batik)
    {
        $menu = Menu::where("group", "=", "batik-madura")->get();
        return view('admin.batikmadura.editBatik', compact('batik', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batik $batik)
    {
        $imageGroup = $batik->id_img;

        if ($request->file('images')) {
            $images = Images::find($batik->id_img);

            foreach ($images->imgdetail as $img) {
                Storage::delete($img->directory);
                $img->delete();
            }

            $imageGroup = $images->id_img;

            foreach ($request->file('images') as $image) {
                $path = $image->store('public/uploads');
                ImageDetail::create([
                    'id_img' => $imageGroup,
                    'directory' => $path,
                    'filename' => $image->getClientOriginalName(),
                ]);
            }
        }

        $batik->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'nama' => $request->nama,
            'motif' => $request->motif,
            'corak' => $request->corak,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'detail' => $request->detail,
            'maps' => $request->maps,
            'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('batik.index')->with('success', 'Berhasil mengubah batik madura');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batik $batik)
    {
        $images = Images::find($batik->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $batik->delete();

        return redirect()->route('batik.index')->with('success', 'Berhasil menghapus batik madura');
    }
}
