<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function partners()
    {
        return view('partners');
    }

    public function catalog()
    {
        $products = Product::all();
        return view('catalog', compact('products'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
