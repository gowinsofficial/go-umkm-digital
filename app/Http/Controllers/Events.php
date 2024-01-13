<?php

namespace App\Http\Controllers;

use App\Models\Eventship;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventship = Eventship::all();;
        return view('admin.eventship.indexEventship', compact('eventship'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.eventship.createEventship');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageGroup = Images::create(['group' => 'eventship']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        Eventship::create([
            'id_img' => $imageGroup->id_img,
            'title' => $request->title,
            'direct_wa' => $request->direct_wa,
            'destination_url' => $request->destination_url,
            'tgl_event' => $request->tgl_event,
            //'detail' => $request->detail,
        ]);

        return redirect()->route('eventship.index')->with('success', 'Berhasil menambahkan Event');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventship $eventship)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eventship $eventship)
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.eventship.editEventship');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eventship $eventship)
    {
        $imageGroup = $eventship->id_img;

        if ($request->file('image')) {
            $images = Images::find($eventship->id_img);

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

        $eventship->update([
            'id_img' => $imageGroup->id_img,
            'title' => $request->title,
            'direct_wa' => $request->nama,
            'destination_url' => $request->destination_url,
            'tgl_event' => $request->tgl_event,
        ]);

        return redirect()->route('eventship.index')->with('success', 'Berhasil mengubah Event');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eventship $eventship)
    {
        $images = Images::find($eventship->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $eventship->delete();

        return redirect()->route('eventship.index')->with('success', 'Berhasil menghapus eventship');
    }
}
