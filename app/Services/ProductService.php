<?php

namespace App\Services;

use App\Interfaces\ProductInterface;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{

    public $productInterface;
    
    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    /**
     * Create a new class instance.
     */
    public function getAll()
    {
        return $this->productInterface->index();
    }

    /**
     * Create a new class instance.
     */
    public function create(array $request)
    {
        return $this->productInterface->store($request);
    }

    /**
     * Create a new class instance.
     */
    public function show($id)
    {
        
        return $this->productInterface->show($id);
    }

    /**
     * Create a new class instance.
     */
    public function update(array $data, $id)
    {
       
        return $this->productInterface->update($id, $data);
    }

    /**
     * Create a new class instance.
     */
    public function delete($id)
    {
        return $this->productInterface->destroy($id);
    }
}
