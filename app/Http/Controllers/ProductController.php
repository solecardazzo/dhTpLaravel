<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function indexwomen()
    {
        $products = Product::paginate(8);
        return view('products.index')->with("products", $products);
    }
}
