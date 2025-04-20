<?php

namespace App\Services;

use App\Interfaces\CategoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    public $categoryInterface;
    
    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    /**
     * Create a new class instance.
     */
    public function getAll()
    {
        return $this->categoryInterface->index();
    }

    /**
     * Create a new class instance.
     */
    public function create(array $request)
    {
        return $this->categoryInterface->store($request);
    }

    /**
     * Create a new class instance.
     */
    public function show($id)
    {
        
        return $this->categoryInterface->show($id);
    }

    /**
     * Create a new class instance.
     */
    public function update(array $data, $id)
    {
       
        return $this->categoryInterface->update($id, $data);
    }

    /**
     * Create a new class instance.
     */
    public function delete($id)
    {
        return $this->categoryInterface->destroy($id);
    }
}
