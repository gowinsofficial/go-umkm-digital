<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Service;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KulinerMadura extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuliner = Service::with(["menu", "image"])->get();
        return view('admin.kuliner.indexKuliner', compact('kuliner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "kuliner-madura")->get();
        return view('admin.kuliner.createKuliner', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'kuliner-madura']);

        foreach ($request->file('images') as $image) {
            $path = $image->store('public/uploads');
            ImageDetail::create([
                'id_img' => $imageGroup->id_img,
                'directory' => $path,
                'filename' => $image->getClientOriginalName(),
            ]);
        }

        Service::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'outline' => $request->outline,
            'resto' => $request->resto,
            'link_resto' => $request->resto_link,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'detail' => $request->detail,
            'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('kuliner.index')->with('success', 'Berhasil menambahkan kuliner');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $kuliner)
    {
        return view('admin.kuliner.detailKuliner', compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $kuliner)
    {
        $menu = Menu::where("group", "=", "kuliner-madura")->get();
        return view('admin.kuliner.editKuliner', compact('kuliner', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $kuliner)
    {
        $imageGroup = $kuliner->id_img;

        if ($request->file('images')) {
            $images = Images::find($kuliner->id_img);

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

        $kuliner->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'outline' => $request->outline,
            'resto' => $request->resto,
            'link_resto' => $request->resto_link,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'detail' => $request->detail,
            'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('kuliner.index')->with('success', 'Berhasil mengubah kuliner');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $kuliner)
    {
        $images = Images::find($kuliner->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $kuliner->delete();

        return redirect()->route('kuliner.index')->with('success', 'Berhasil menghapus kuliner');
    }
}
