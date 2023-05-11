<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\EditRequest;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::with('document', 'warehouse')->get();

        return view('admin.products', compact('products'));
    }

    public function createPage()
    {
        $warehouses = Warehouse::all();

        return view('admin.products.create', compact('warehouses'));
    }

    public function create(CreateRequest $request)
    {
        $data = $request->validated();
        $data['alias'] = Str::slug($data['name']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->storeAs('images', 'image_for_'.$data['alias'].'.'.$request->file('image')->getClientOriginalExtension(), 'public');
        }

        $product = Product::create($data);

        if ($request->hasFile('document')) {
            $product->document()->create(['path' => $request->file('document')->storeAs('documents', 'doc_for_'.$data['alias'].'.'.$request->file('document')->getClientOriginalExtension(), 'public')]);
        }

        return to_route('admin.products.list')->with('success', 'Продукт успешно добавлен');
    }

    public function editPage($productId)
    {
        $product = Product::findOrFail($productId);
        $warehouses = Warehouse::all();

        return view('admin.products.edit', compact('product', 'warehouses'));
    }

    public function edit(EditRequest $request, $productId)
    {
        $data = $request->validated();
        $product = Product::findOrFail($productId);

        if ($request->hasFile('image')) {
            if($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->storeAs('images', 'image_for_'.$product['alias'].'.'.$request->file('image')->getClientOriginalExtension(), 'public');
        }

        if ($request->hasFile('document')) {
            if($product->document) {
                Storage::disk('public')->delete($product->document->path);
                $product->document()->update(['path' => $request->file('document')->storeAs('documents', 'doc_for_'.$product['alias'].'.'.$request->file('document')->getClientOriginalExtension(), 'public')]);
            }
            $product->document()->create(['path' => $request->file('document')->storeAs('documents', 'doc_for_'.$product['alias'].'.'.$request->file('document')->getClientOriginalExtension(), 'public')]);
        }

        $product->update($data);

        return to_route('admin.products.list')->with('success', 'Продукт успешно обновлён');
    }

    public function delete($productId)
    {
        $product = Product::findOrFail($productId);

        if ($product->document) {
            Storage::disk('public')->delete($product->document->path);
            $product->document->delete();
        }
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.list')->with('success', 'Продукт успешно удален');
    }

    public function get($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
