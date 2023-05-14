<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }

    public function create(CreateCategoryRequest $r)
    {
        $data = $r->validated();

        $data = Category::create($data);

        return to_route('admin.category.list');
    }

    public function delete($id)
    {
        Category::find($id)->delete();

        return to_route('admin.category.list');
    }
}
