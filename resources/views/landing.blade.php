@extends('layouts.base')
@section('content')
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>Give Yourself the<br />Item You Deserve!</h1>
                    <p>
                        Success isn't always about greatness. It's about happiness.
                        <br />Happiness makes the world beautiful.
                    </p>
                    <a href="#categories" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="Assets/image1.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="categories" class="categories">
        <h1 class="text-center"><a class="text-black text-decoration-none" href="/categories">Categories</a></h1>
        <div class="small-container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-3">
                        <p>{{ $category->name }}</p>
                        <img src="https://source.unsplash.com/960x960?{{ $category->name }}" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- featured products -->
    <section class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            @foreach ($products->take(4) as $product)
                <div class="col-4">
                    <a href="products-detail.html"><img
                            src="https://source.unsplash.com/420x420?{{ $product->category->name }}" alt="" /></a>
                    <a href="products-detail.html">
                        <h4>{{ $product->name }}</h4>
                    </a>
                    <p>{{ $product->category->name }}</p>
                    <em>{{ $product->description }}</em>
                    <sub>{{ $product->price }}</sub>
                </div>
            @endforeach
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            @foreach ($products->take(8) as $product)
                <div class="col-4">
                    <a href="products-detail.html"><img
                            src="https://source.unsplash.com/420x420?{{ $product->category->name }}" alt="" /></a>
                    <a href="products-detail.html">
                        <h4>{{ $product->name }}</h4>
                    </a>
                    <p>{{ $product->category->name }}</p>
                    <em>{{ $product->description }}</em>
                    <sub>{{ $product->price }}</sub>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Offer -->
    <section class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="Assets/exclusive.png" class="offer-img" alt="" />
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Felicia</p>
                    <h1>Smart Band 4</h1>
                    <small>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem
                        perferendis perspiciatis recusandae officia commodi repellendus.
                    </small>
                    <br />
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                        quasi optio soluta perferendis similique amet architecto enim
                        neque sunt dolorem?
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="Assets/user-1.png" alt="" />
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                        quasi optio soluta perferendis similique amet architecto enim
                        neque sunt dolorem?
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="Assets/user-2.png" alt="" />
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                        quasi optio soluta perferendis similique amet architecto enim
                        neque sunt dolorem?
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="Assets/user-3.png" alt="" />
                    <h3>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- brands -->
    <section class="brands">
        <div class="small-container">
            <h2 class="title">Collaborating Brands</h2>
            <div class="row">
                <div class="col-5">
                    <img src="Assets/logo-godrej.png" alt="" />
                </div>
                <div class="col-5">
                    <img src="Assets/logo-oppo.png" alt="" />
                </div>
                <div class="col-5">
                    <img src="Assets/logo-coca-cola.png" alt="" />
                </div>
                <div class="col-5">
                    <img src="Assets/logo-paypal.png" alt="" />
                </div>
                <div class="col-5">
                    <img src="Assets/logo-philips.png" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection
