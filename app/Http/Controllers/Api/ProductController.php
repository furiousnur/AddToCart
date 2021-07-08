<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //return all products
    public function index()
    {
        $products = Product::with('categories:id,name')->get();
        return response()->json($products);
    }
}
