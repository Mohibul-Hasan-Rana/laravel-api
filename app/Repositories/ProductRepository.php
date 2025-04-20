<?php

namespace App\Repositories;

use App\Models\Product;
use App\Interfaces\ProductInterface;
use Illuminate\Http\Request;

class ProductRepository implements ProductInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Product::with('category')->get();
    }

    public function store(array $request)
    {    
        return Product::create($request);
    }

    public function show($id)
    {
        return Product::with('category')->findOrFail($id);
    }

    public function update($id,array $request)
    {
        $product = Product::findOrFail($id);
        $product->update($request);
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return true;
    }
}
