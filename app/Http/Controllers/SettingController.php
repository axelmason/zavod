<?php

namespace App\Http\Controllers;

use App\Http\Requests\Setting\EditRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit(EditRequest $request)
    {
        $data = $request->validated();

        Setting::where('alias', $data['alias'])->update(['value' => $data['value']]);
    }
}
