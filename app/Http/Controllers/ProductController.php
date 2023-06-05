<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        return view('products.index', [
            'products' => Product::latest()->filter(request(['search']))->get()
        ]);
    }

    public function codeCategory($code) {
        return view('products.index', [
           'products' => DB::table('products')->join('categories', 'categories.category_id', '=', 'products.category_id')->where('categories.code', '=', $code)->where('categories.active', '=', 1)->orderBy('price')->Paginate(15)
        ]);
    }
}
