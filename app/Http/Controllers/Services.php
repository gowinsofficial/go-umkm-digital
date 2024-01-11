<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Service;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Services extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $service = Service::with(["menu", "image"])->get();
        return view('admin.service.indexServices');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $menu = Menu::where("group", "=", "kuliner-madura")->get();
        return view('admin.service.createServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $imageGroup = Images::create(['group' => 'service']);

        // foreach ($request->file('images') as $image) {
        //     $path = $image->store('public/uploads');
        //     ImageDetail::create([
        //         'id_img' => $imageGroup->id_img,
        //         'directory' => $path,
        //         'filename' => $image->getClientOriginalName(),
        //     ]);
        // }

        Service::create([
            // 'id_img' => $imageGroup->id_img,
            'group' => $request->group,
            'sub_group' => $request->sub_group,
            'template_wa' => $request->template_wa,
            // 'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('service.index')->with('success', 'Berhasil menambahkan service');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.detailServices', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // $menu = Menu::where("group", "=", "kuliner-madura")->get();
        return view('admin.service.editServices', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // $imageGroup = $kuliner->id_img;

        // if ($request->file('images')) {
        //     $images = Images::find($kuliner->id_img);

        //     foreach ($images->imgdetail as $img) {
        //         Storage::delete($img->directory);
        //         $img->delete();
        //     }

        //     $imageGroup = $images->id_img;

        //     foreach ($request->file('images') as $image) {
        //         $path = $image->store('public/uploads');
        //         ImageDetail::create([
        //             'id_img' => $imageGroup,
        //             'directory' => $path,
        //             'filename' => $image->getClientOriginalName(),
        //         ]);
        //     }
        // }

        $service->update([
            // 'id_img' => $imageGroup->id_img,
            'group' => $request->group,
            'sub_group' => $request->sub_group,
            'template_wa' => $request->template_wa,
            // 'whatsapp_umkm' => $request->whatsapp,
        ]);

        return redirect()->route('service.index')->with('success', 'Berhasil mengubah Service');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // $images = Images::find($kuliner->id_img);
        // foreach ($images->imgdetail as $img) {
        //     Storage::delete($img->directory);
        // }
        //$images->delete();
        $service->delete();

        return redirect()->route('service.index')->with('success', 'Berhasil menghapus service');
    }
}
