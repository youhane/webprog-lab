<form action="/products" method="GET" class="searchbar">
    @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if (request('name'))
        <input type="hidden" name="name" value="{{ request('name') }}">
    @endif
    <input type="text" placeholder="Search" name="search" value="{{ request('search') }}">
    <button type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>
