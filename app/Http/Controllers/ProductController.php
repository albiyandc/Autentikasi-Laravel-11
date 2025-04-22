<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $produk = Product::all();
        return view('produk.index', compact('produk'));
    }

    public function create() {
        return view('produk.create');
    }

    public function store(Request $request) {
        Product::create($request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
        ]));

        return redirect()->route('products.index');
    }
}
