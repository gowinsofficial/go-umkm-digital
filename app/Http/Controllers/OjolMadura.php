<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use App\Models\Ojol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OjolMadura extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ojolmadura = Ojol::with(["menu", "image"])->get();
        return view('admin.ojolmadura.indexOjol', compact('ojolmadura'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::where("group", "=", "ojol-madura")->get();
        return view('admin.ojolmadura.createOjol', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'ojol-madura']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        Ojol::create([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup->id_img,
            'nama' => $request->nama,
            'detail' => $request->detail,
            'whatsapp_to' => $request->whatsapp,
        ]);

        return redirect()->route('ojol.index')->with('success', 'Berhasil menambahkan ojol');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ojol $ojol)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ojol $ojol)
    {
        $menu = Menu::where("group", "=", "ojol-madura")->get();
        return view('admin.ojolmadura.editOjol', compact('ojol', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ojol $ojol)
    {
        $imageGroup = $ojol->id_img;

        if ($request->file('image')) {
            $images = Images::find($ojol->id_img);

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

        $ojol->update([
            'id_menu' => $request->menu,
            'id_img' => $imageGroup,
            'nama' => $request->nama,
            'detail' => $request->detail,
            'whatsapp_to' => $request->whatsapp,
        ]);

        return redirect()->route('ojol.index')->with('success', 'Berhasil mengubah ojol');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ojol $ojol)
    {
        $images = Images::find($ojol->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $ojol->delete();

        return redirect()->route('ojol.index')->with('success', 'Berhasil menghapus ojol');
    }
}
