@extends('layouts.auth')
@section('content')
    <h1>Edit Product</h1>
    <form action="/products/{{ $product->slug }}/edit" method="POST" class="form-registration" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required
                value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                placeholder="Enter Product Description" required value="{{ $product->description }}">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                    @if ($product->category_id == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            @include('components.image', ['image' => $product->image, 'alt' => $product->name])
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required
                value="{{ $product->price }}">
        </div>
        <button type="submit" class="btn rounded-2 w-100 btn-primary">Submit</button>
    </form>
@endsection
