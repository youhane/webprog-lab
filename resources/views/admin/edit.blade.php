@extends('layouts.auth')
@section('content')
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center">
            <h3>Edit Product</h3>
        </div>
        <div class="card-body">
            <form action="/products/{{ $product->slug }}/edit" method="POST" class="form-registration"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter Product Name" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Enter Product Description" value="{{ $product->description }}">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" id="category_id" name="category_id">
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
                    <label for="image-input" class="form-label">Image</label>
                    <div class="currentImg">
                        @include('components.image', ['image' => $product->image, 'alt' => $product->name])
                    </div>
                    <input type="file" class="form-control" id="image-input" name="image">
                    <img class="newImg" src="" alt="" id="image-preview">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price"
                        value="{{ $product->price }}">
                </div>
                <button type="submit" class="btn rounded-2 w-100 btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
