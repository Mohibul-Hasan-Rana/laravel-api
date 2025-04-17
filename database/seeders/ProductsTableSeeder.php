<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone X',
                'description' => 'Latest flagship smartphone with 128GB storage',
                'price' => 799.99,
                'category_id' => 1 
            ],
            [
                'name' => 'Wireless Earbuds',
                'description' => 'Noise cancelling wireless earbuds',
                'price' => 199.99,
                'category_id' => 1  
            ],
            [
                'name' => 'Cotton T-Shirt',
                'description' => '100% cotton crew neck t-shirt',
                'price' => 24.99,
                'category_id' => 2  
            ],
            [
                'name' => 'Non-Stick Pan',
                'description' => '10-inch ceramic non-stick frying pan',
                'price' => 39.99,
                'category_id' => 3  
            ],
        ]);
    }
}
