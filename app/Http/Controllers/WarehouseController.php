<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WarehouseController extends Controller
{
    public function list()
    {
        return view('admin.warehouse', ['warehouses' => Warehouse::all()]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['alias'] = Str::slug($data['name']);
        Warehouse::create($data);

        return to_route('admin.warehouse.list');
    }

    public function delete($id)
    {
        Warehouse::find($id)->delete();

        return to_route('admin.warehouse.list');
    }
}
