<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index() {
        return Category::all();
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        return Category::create($request->all());
    }

    public function show(Category $category) {
        return $category;
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        return $category;
    }

    public function destroy(Category $category) {
        $category->delete();
        return response()->noContent();
    }
}
