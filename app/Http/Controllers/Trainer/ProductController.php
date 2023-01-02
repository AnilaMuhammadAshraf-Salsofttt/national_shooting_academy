<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request, $search = '')
    {
        if ($request->search) {
            $search = $request->search;
        }
        $products = Product::where('name', 'LIKE', "%{$search}%")->get();
        return response()->json(["products" => $products]);
    }
}
