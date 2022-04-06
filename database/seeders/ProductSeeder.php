<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
                'name'=>'Apple Macbook pro 16',
                'details'=>' Apple m1 pro',
                'description'=>'Lorem voluptate dolore voluptate adipisicing veniam amet voluptate. Do magna ipsum fugiat excepteur proident ex nulla ex aliqua fugiat consequat laborum. Exercitation ad est qui do magna do aute quis. Aliquip aliqua pariatur culpa nostrud sit proident cupidatat et sint elit duis sunt voluptate.',
                'brand'=>'Apple',
                'price'=>2499,
                'shipping_cost'=>25,
                'image_path'=>'storage/product.png',
            ],
            [
                'name'=>'Samsung Galaxy Pro',
                'details'=>'13.3 inch 8gb ssd bhot bdhiya hai',
                'description'=>'Velit labore adipisicing adipisicing velit dolore excepteur aute pariatur exercitation do laboris. Amet dolore consequat veniam et adipisicing. Do enim commodo aliquip pariatur veniam.',
                'brand'=>'Samsung',
                'price'=>1800,
                'shipping_cost'=>20,
                'image_path'=>'storage/product2.png',
            ],

        ];

        foreach($products as $key=>$value){
           Product::create($value);
        }
    }
}
