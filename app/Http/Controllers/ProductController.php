<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sortingType = $request->get('sort');
        $products = [];
        switch ($sortingType) {
            case 'date':
                $products = Product::orderBy('created_at', 'desc')->get();
                break;
            case 'price':
                $products = Product::orderBy('price', 'desc')->get();
                break;
            default:
                $products = Product::all();
                break;
        }
        return view('index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
