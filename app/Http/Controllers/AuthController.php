<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password])) {

            return redirect('/data');
        }
        return redirect()->route('login')->with('error', 'Username atau Password anda salah!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('success', "Anda berhasil logout");
    }
}
