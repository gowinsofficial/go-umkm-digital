<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaduraTvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maduratv = MaduraTv::with(["menu", "image"])->get();
        return view('admin.maduratv.indexMaduratv', compact('maduratv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "madura-tv")->get();
        return view('admin.maduratv.createMaduratv', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'madura-tv']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        MaduraTv::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'detail' => $request->detail,
            'direct_link' => $request->direct_link,
        ]);

        return redirect()->route('maduratv.index')->with('success', 'Berhasil menambahkan madura tv');
    }

    /**
     * Display the specified resource.
     */
    public function show(MaduraTv $maduratv)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaduraTv $maduratv)
    {
        $menu = Menu::where("group", "=", "madura-tv")->get();
        return view('admin.maduratv.editMaduratv', compact('maduratv', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaduraTv $maduratv)
    {
        $imageGroup = $maduratv->id_img;

        if ($request->file('image')) {
            $images = Images::find($maduratv->id_img);

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

        $maduratv->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'detail' => $request->detail,
            'direct_link' => $request->direct_link,
        ]);

        return redirect()->route('maduratv.index')->with('success', 'Berhasil mengubah madura tv');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaduraTv $maduratv)
    {
        $images = Images::find($maduratv->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $maduratv->delete();

        return redirect()->route('maduratv.index')->with('success', 'Berhasil menghapus madura tv');
    }
}
