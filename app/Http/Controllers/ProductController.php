<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function dashboard()
    {
        $products = Product::all();
        $products = $products->groupBy('category.name');

        return view('home', [
            'active' => 'dashboard',
            'products' => $products,
        ]);
    }

    public function index()
    {
        if (request()->search && request()->search != ' ' ) {
            $products = Product::where('name', 'like', '%' . request()->search . '%')->paginate(8);
        } elseif (request()->category && request()->category != ' ') {
            $products = Product::whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            })->paginate(8);
        } else {
            $products = Product::paginate(8);
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

        if ($request->file('image')) {
            Storage::delete($product->image);
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Product::where('id', $product->id)->update($validatedData);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        Storage::delete($product->image);

        return redirect('/products');
    }
}
