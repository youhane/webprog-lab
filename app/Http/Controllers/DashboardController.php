<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(){
        return view('landing', [
            'active' => 'home',
            'categories' => Category::all(),
            'products' => Product::paginate(8),
        ]);
    }
}
