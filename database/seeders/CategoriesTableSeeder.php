<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electronics',
                'description' => 'All electronic devices and accessories'
            ],
            [
                'name' => 'Clothing',
                'description' => 'Fashion items and apparel'
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Home appliances and kitchenware'
            ],
        ]);
    }
}
