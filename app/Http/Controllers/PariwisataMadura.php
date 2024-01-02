<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use App\Models\Pariwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PariwisataMadura extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pariwisata = Pariwisata::with(["menu", "image"])->get();
        return view('admin.pariwisata.indexPariwisata', compact('pariwisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "pariwisata")->get();
        return view('admin.pariwisata.createPariwisata', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'pariwisata']);

        foreach ($request->file('images') as $image) {
            $path = $image->store('public/uploads');
            ImageDetail::create([
                'id_img' => $imageGroup->id_img,
                'directory' => $path,
                'filename' => $image->getClientOriginalName(),
            ]);
        }

        Pariwisata::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'maps' => $request->maps,
            'rating' => $request->rating,
            'detail' => $request->detail,
            'whatsapp_to' => $request->whatsapp,
        ]);

        return redirect()->route('pariwisata.index')->with('success', 'Berhasil menambahkan wisata');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pariwisata $pariwisatum)
    {
        return view('admin.pariwisata.detailPariwisata', compact('pariwisatum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pariwisata $pariwisatum)
    {
        $menu = Menu::where("group", "=", "batik-madura")->get();
        return view('admin.pariwisata.editPariwisata', compact('pariwisatum', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pariwisata $pariwisatum)
    {
        $imageGroup = $pariwisatum->id_img;

        if ($request->file('images')) {
            $images = Images::find($pariwisatum->id_img);

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

        $pariwisatum->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'maps' => $request->maps,
            'rating' => $request->rating,
            'detail' => $request->detail,
            'whatsapp_to' => $request->whatsapp,
        ]);

        return redirect()->route('pariwisata.index')->with('success', 'Berhasil mengubah wisata');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pariwisata $pariwisatum)
    {
        $images = Images::find($pariwisatum->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $pariwisatum->delete();

        return redirect()->route('pariwisata.index')->with('success', 'Berhasil menghapus wisata');
    }
}
