<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;

class ProductController extends Controller
{
   
    public function index()
    {
        return Product::with('category')->get();
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        return Product::create($request->all());
    }

    
    public function show(Product $product)
    {
        return $product->load('category');
    }

    
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->noContent();
    }
}
