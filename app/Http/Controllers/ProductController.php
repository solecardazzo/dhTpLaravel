<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
      $products = Product::paginate(10);
      return view('products.index')->with("products", $products);
  }
  public function show($id)
  {
    return view('products.show', ['product' => Product::findOrFail($id)]);
  }

}
