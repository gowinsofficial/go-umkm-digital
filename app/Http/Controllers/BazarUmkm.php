<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BazarUmkm extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bazar = Bazar::all();;
        return view('admin.bazar.indexBazar', compact('bazar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.bazar.createBazar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'bazar']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        Bazar::create([
            'id_img' => $imageGroup->id_img,
            'title' => $request->title,
            'tgl_acara' => $request->tgl_acara,
            'destination_url' => $request->destination_url,
            'whatsapp_member' => $request->whatsapp_member,
            //'detail' => $request->detail,
        ]);

        return redirect()->route('bazar.index')->with('success', 'Berhasil menambahkan Bazar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bazar $bazar)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bazar $bazar)
    {
        $bazar = Bazar::all();
        return view('admin.bazar.editBazar', compact('bazar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bazar $bazar)
    {
        $imageGroup = $bazar->id_img;

        if ($request->file('image')) {
            $images = Images::find($bazar->id_img);

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

        $bazar->update([
            'id_img' => $imageGroup->id_img,
            'title' => $request->title,
            'tgl_acara' => $request->tgl_acara,
            'destination_url' => $request->destination_url,
            'whatsapp_member' => $request->whatsapp_member,
        ]);

        return redirect()->route('bazar.index')->with('success', 'Berhasil mengubah Bazar');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bazar $bazar)
    {
        $images = Images::find($bazar->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $bazar->delete();

        return redirect()->route('bazar.index')->with('success', 'Berhasil menghapus Bazar');
    }
}
