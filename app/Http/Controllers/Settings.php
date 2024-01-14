<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Settings extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function get($lookup) {
        $settings = Setting::pluck('value', 'lookup')->all();
        if (array_key_exists($lookup, $settings)) {
            return $settings[$lookup];
        }
        return null;
    }

    public function pageSetting() {
        $settings = Setting::orderBy('id')->get()->toArray();
        return view('admin.setting', compact('settings'));
    }

    public function saveSetting(Request $request) {

        foreach(Setting::pluck('value', 'lookup')->all() as $key => $setting) {
            if ($request->input($key) != null && $request->input($key) != $setting) {
                Setting::where("lookup", '=', $key)->update([
                    "value" => $request->input($key)
                ]);
            }
        }
        return redirect()->back()->with('success', 'Pengaturan berhasil disimpan');
    }

}
