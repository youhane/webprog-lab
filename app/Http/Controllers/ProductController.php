<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $products = Product::where('name', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->get()->groupBy('category.name');
        } else {
            $products = Product::all()->groupBy('category.name');
        }

        return view('products.products', [
            'active' => 'products',
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add', [
            'active' => 'admin',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Product::create([
            'name' => $validatedData['name'],
            'slug' => str_replace(' ', '-', strtolower($validatedData['name'])),
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect('/admin/manage');
    }

    public function show(Product $product)
    {
        return view('products.product', [
            'active' => 'home',
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.product', [
            'active' => 'home',
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/admin/manage');
    }
}
