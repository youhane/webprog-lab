@extends('layouts.base')
@section('content')
    {{-- Check if user is logged in --}}
    @if (Auth::check())
        <h2>Welcome {{ auth()->user()->name }}</h2>
        <form action="/logout" method="POST">
            @csrf
            <button class="nav-link btn btn-primary">Logout</button>
        </form>
    @endif

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>Give Yourself the<br />Item You Deserve!</h1>
                    <p>
                        Success isn't always about greatness. It's about happiness.
                        <br />Happiness makes the world beautiful.
                    </p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="Assets/image1.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories  -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="Assets/category-1.jpg" alt="" />
                </div>
                <div class="col-3">
                    <img src="Assets/category-2.jpg" alt="" />
                </div>
                <div class="col-3">
                    <img src="Assets/category-3.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-1.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-2.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-3.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-4.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-5.jpg" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-6.jpg" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-7.jpg" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-8.jpg" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-9.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-10.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-11.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-detail.html"><img src="Assets/product-12.png" alt="" /></a>
                <a href="products-detail.html">
                    <h4>Diamond Ring</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>
    <!-- Offer -->
    <div class="offer">
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
    </div>

    <!-- testimonial -->
    <div class="testimonial">
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
    </div>
    <!-- brands -->
    <div class="brands">
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
    </div>
@endsection
