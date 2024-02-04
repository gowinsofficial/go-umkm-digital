<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserId extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();;
        return view('admin.user.indexUser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        return view('admin.user.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            //'detail' => $request->detail,
        ]);

        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan User');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //$menu = Menu::where("group", "=", "branding-umkm")->get();
        $user = User::all();;
        return view('admin.user.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('success', 'Berhasil mengubah User');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Berhasil menghapus user');
    }
}
