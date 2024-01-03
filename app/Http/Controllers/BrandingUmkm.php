<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandingUmkm extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branding = Branding::with(["menu", "image"])->get();
        return view('admin.branding.indexBranding', compact('branding'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.branding.createBranding', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'branding-umkm']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        Branding::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'detail' => $request->detail,
        ]);

        return redirect()->route('branding.index')->with('success', 'Berhasil menambahkan brand');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branding $branding)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branding $branding)
    {
        $menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.branding.editBranding', compact('branding', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branding $branding)
    {
        $imageGroup = $branding->id_img;

        if ($request->file('image')) {
            $images = Images::find($branding->id_img);

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

        $branding->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'detail' => $request->detail,
        ]);

        return redirect()->route('branding.index')->with('success', 'Berhasil mengubah brand');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branding $branding)
    {
        $images = Images::find($branding->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $branding->delete();

        return redirect()->route('branding.index')->with('success', 'Berhasil menghapus brand');
    }
}
