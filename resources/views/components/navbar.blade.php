<nav class="navbar navbar-expand-lg navbar-dark bg-danger px-5">
    <a class="navbar-brand" href="/">Barbatos Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/category">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "register") ? 'active' : '' }}" href="/register">Register</a>
            </li>
        </ul>
    </div>
</nav>
