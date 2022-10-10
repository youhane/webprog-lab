@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Category</h1>
            @foreach ($categories as $category)
                <h1>{{ $category->name }}</h1>
            @endforeach
        </div>
    </div>
@endsection
