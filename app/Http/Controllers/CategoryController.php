<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index() {
        return view('categories.index', [
            'categories' => Category::latest()->filter(request(['search']))->get()
        ]);
    }

    public function codeCategory($code)
    {
        return view('products.index', [
            'products' => Category::latest()->filter(request(['search']))->get()
        ]);
    }
}
