<?php

namespace App\Repositories;

use App\Models\Category;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryInterface
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
        return Category::all();
    }

    public function store(array $request)
    {    
        return Category::create($request);
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function update($id,array $request)
    {
        $product = Category::findOrFail($id);
        $product->update($request);
        return $product;
    }

    public function destroy($id)
    {
        $product = Category::findOrFail($id);
        $product->delete();
        return true;
    }
}
