<?php

use Illuminate\Database\Seeder;
use  App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = factory(Product::class, 5)->create();
    }
}
