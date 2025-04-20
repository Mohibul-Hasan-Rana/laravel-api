<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Response;
use App\Services\ProductService;
use App\Interfaces\ProductInterface;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
   
    public function index()
    {
        return $this->service->getAll();
    }

   
    public function store(ProductRequest $request)
    {
        
        return $this->service->create($request->all());
    }

    
    public function show($id)
    {
        return $this->service->show($id);
    }

    
    public function update(Request $request, $id)
    {        
        $product =  $this->service->update($request->all(), $id);
        return $product;
    }

    
    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->noContent();
    }
}
