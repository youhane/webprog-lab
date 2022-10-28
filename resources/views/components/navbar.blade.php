<nav class="navbar navbar-expand-lg bg-light px-3 px-lg-5 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Barbatos Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="/products?category={{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'register' ? 'active' : '' }}" href="/register"><i
                                class="bi bi-plus-circle"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                class="bi bi-door-open"></i> Login</a>
                    </li>
                @elseif (Auth::check())
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-fill"></i>
                                    Profile</a></li>
                            @if (auth()->user()->is_admin == 0)
                                <li><a class="dropdown-item" href="/cart"><i class="bi bi-basket"></i> Cart</a></li>
                                <li><a class="dropdown-item" href="/history"><i class="bi bi-clock-history"></i>
                                        History</a></li>
                            @elseif (auth()->user()->is_admin == 1)
                                <li><a class="dropdown-item" href="/products"><i class="bi bi-columns-gap"></i> Manage
                                        Products</a></li>
                                <li><a class="dropdown-item" href="/products/add"><i class="bi bi-plus-square"></i>
                                        Create New Product</a></li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
