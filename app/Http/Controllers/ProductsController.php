<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
     public function index()
    {
        $products = Product::all(); // Ambil semua produk
        return view('products.index', compact('products')); // Kirim data ke view
    }

    public function store()
    {
        // Menambahkan produk baru (seperti yang telah dijelaskan sebelumnya)
        $product = new Product();
        $product->name = 'Product ' . rand(1, 1000);
        $product->description = 'Description for product ' . rand(1, 1000);
        $product->price = rand(100, 1000);
        $product->qty = rand(1, 50);
        $product->save();

        return redirect('/products');
    }
}
