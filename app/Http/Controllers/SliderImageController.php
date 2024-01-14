<?php

namespace App\Http\Controllers;

use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\MaduraTv;
use App\Models\Menu;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = SliderImage::all();
        return view('admin.slider.listSlider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $image = $request->file('image');
        $path = $image->store('public/sliders');

        SliderImage::create([
            'title' => $request->title,
            'img_name' => $path,
        ]);

        return redirect()->route('slider.index')->with('success', 'Berhasil menambahkan slider galery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SliderImage $slider)
    {
        if ($slider) {
            Storage::delete($slider->img_name);
            $slider->delete();
            return redirect()->route('slider.index')->with('success', 'Berhasil menghapus slider galery');
        }
        return redirect()->route('slider.index')->with('error', 'Gagal menghapus slider galery');
    }
}
