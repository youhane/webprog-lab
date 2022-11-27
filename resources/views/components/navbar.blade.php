<nav>
    <div class="left">
        <div class="nav-logo">
            <a href="/"><img src="/assets/logo-small.png" alt="barbatos-shop"></a>
        </div>
        <div class="categories">
            <span>Categories</span>
            <div class="dropdown">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="/products?category={{ $category->name }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="right">
        <button id="nav-button"><i class="fa-solid fa-2x fa-align-right"></i></button>
        <div class="menu" id="menu">
            <ul>
                <button id="nav-close"><i class="fa-solid fa-2x fa-xmark"></i></button>
                <div class="nav-drop">
                    @if (Auth::guest())
                        <li>
                            <a href="/register">Register</a>
                        </li>
                        <hr />
                        <li>
                            <a href="/login">Login</a>
                        </li>
                    @elseif (Auth::check())
                        <li>
                            <a href="#">
                                {{ auth()->user()->name }}
                            </a>
                        </li>
                        <ul class="drop-nav">
                            <li>
                                <a href="/profile">Profile</a>
                            </li>
                            @if (auth()->user()->is_admin == 0)
                                <li>
                                    <a href="/cart">Cart</a>
                                </li>
                                <li>
                                    <a href="/history">History</a>
                                </li>
                            @elseif (auth()->user()->is_admin == 1)
                                <li>
                                    <a href="/products">Manage Products</a>
                                </li>
                                <li>
                                    <a href="/products/add">Create New Product</a>
                                </li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    @endif
                </div>
            </ul>
        </div>
    </div>
</nav>
