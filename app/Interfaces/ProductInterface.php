<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ProductInterface
{
    public function index();
    public function store(array $request);
    public function show($id);
    public function update($id, array $request);
    public function destroy($id);
}
