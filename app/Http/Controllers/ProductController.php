<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->search) {
            $products = Product::where('name', 'like', '%' . request()->search . '%')->get();
            $products = $products->groupBy('category.name');
        }elseif (request()->category) {
            $products = Product::whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            $products = $products->groupBy('category.name');
        }else {
            $products = Product::all();
            $products = $products->groupBy('category.name');
        }

        return view('products.products', [
            'active' => 'products',
            'products' => $products,
        ]);
    }

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
            'category_id' => 'required',
            'image' => 'image|required',
            'price' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['image'] = $request->file('image')->store('product-images');

        Product::create([
            'name' => $validatedData['name'],
            'slug' => str_replace(' ', '-', strtolower($validatedData['name'])),
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image' => $validatedData['image'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect('/products');
    }

    public function show(Product $product)
    {
        $related_products = Product::whereHas('category', function ($query) use ($product) {
            $query->where('slug', $product->category->slug);
        })->get();

        return view('products.product', [
            'active' => 'product',
            'product' => $product,
            'related_products' => $related_products,
        ]);
    }

    public function edit(Product $product)
    {
        return view('admin.edit', [
            'active' => 'edit',
            'categories' => Category::all(),
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Product::where('id', $product->id)->update($validatedData);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products');
    }
}
