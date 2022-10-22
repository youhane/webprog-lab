<nav class="navbar">
    <div class="logo">
        <a href="/">Barbatos Shop</a>
    </div>
    <div>
        <ul id="MenuItems">
            <li><a href="/products">Products</a></li>
            <li><a href="/category">Categories</a></li>
            @if (Auth::guest())
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
            @if (Auth::user() && Auth::user()->is_admin)
                <li><a href="/admin/manage">Manage Products</a></li>
                <li><a href="/admin/add">Create Product</a></li>
            @endif
        </ul>
    </div>
    <a href="cart.html">
        <img src="Assets/cart.png" width="30px" height="30px" alt="" />
    </a>
    <img src="Assets/menu.png" class="menu-icon" alt="" onclick="menutoggle()" />
</nav>
