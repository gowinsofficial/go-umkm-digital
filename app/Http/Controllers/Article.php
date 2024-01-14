<?php

namespace App\Http\Controllers;

use App\Models\PostArticles;
use App\Models\ImageDetail;
use App\Models\Images;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Article extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = PostArticles::all();;
        return view('admin.article.indexPostArticle', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.article.createPostArticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $imageGroup = Images::create(['group' => 'article']);

        $image = $request->file('image');
        $path = $image->store('public/uploads');
        //$currentTime = Carbon::now();
        ImageDetail::create([
            'id_img' => $imageGroup->id_img,
            'directory' => $path,
            'filename' => $image->getClientOriginalName(),
        ]);

        PostArticles::create([
            'id_img' => $imageGroup->id_img,
            'header' => $request->header,
            'writer' => $request->writer,
            'tgl_post' => Carbon::now(),
            'content' => $request->content,
            'file_upload' => $request->file_upload,
            //'detail' => $request->detail,
        ]);

        return redirect()->route('article.index')->with('success', 'Berhasil menambahkan Article');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostArticles $article)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostArticles $article)
    {
        $article = PostArticles::all();
        return view('admin.article.editPostArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostArticles $article)
    {
        $imageGroup = $article->id_img;

        if ($request->file('image')) {
            $images = Images::find($article->id_img);

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

        $article->update([
            'id_img' => $imageGroup,
            'header' => $request->header,
            'writer' => $request->writer,
            'tgl_post' => $request->tgl_post,
            'content' => $request->content,
            'file_upload' => $request->file_upload,
        ]);

        return redirect()->route('article.index')->with('success', 'Berhasil mengubah Article');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostArticles $article)
    {
        $images = Images::find($article->id_img);
        foreach ($images->imgdetail as $img) {
            Storage::delete($img->directory);
        }
        $images->delete();
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Berhasil menghapus article');
    }
}
