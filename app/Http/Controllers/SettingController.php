<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function list()
    {
        $settings = Setting::all();
        return view('admin.sections', compact('settings'));
    }

    public function save(Request $request, $id)
    {
        $value = boolval($request->alias) ?? false;
        Setting::findOrFail($id)->update(['active' => $value]);
        return back();
    }
}
