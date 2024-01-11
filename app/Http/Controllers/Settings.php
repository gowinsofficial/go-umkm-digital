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

}
