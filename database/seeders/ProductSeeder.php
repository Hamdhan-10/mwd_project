<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            ['name' => 'T-Shirt Classic', 'brand' => 'NextFit', 'price' => 19.99, 'rating' => 4, 'image' => 'tshirt1.jpg'],
            ['name' => 'T-Shirt Modern',  'brand' => 'Trendify', 'price' => 24.99, 'rating' => 5, 'image' => 'tshirt2.jpg'],
            ['name' => 'T-Shirt Street',  'brand' => 'UrbanLine', 'price' => 22.50, 'rating' => 3, 'image' => 'tshirt3.jpg'],
            ['name' => 'Cap Snapback',    'brand' => 'CoolHead', 'price' => 14.99, 'rating' => 5, 'image' => 'cap1.jpg'],
            ['name' => 'Cap Classic',     'brand' => 'ChillWear', 'price' => 12.99, 'rating' => 4, 'image' => 'cap2.jpg'],
            ['name' => 'Cap Retro',       'brand' => 'RetroGear', 'price' => 16.00, 'rating' => 4, 'image' => 'cap3.jpg'],
            ['name' => 'Hoodie Xtreme',   'brand' => 'HeatZone', 'price' => 39.99, 'rating' => 5, 'image' => 'hoodie1.jpg'],
            ['name' => 'Hoodie Lite',     'brand' => 'WarmWear', 'price' => 34.99, 'rating' => 4, 'image' => 'hoodie2.jpg'],
            ['name' => 'Hoodie Fit',      'brand' => 'NextFit', 'price' => 37.50, 'rating' => 5, 'image' => 'hoodie3.jpg'],
        ]);
    }
}

