<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/products" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('name'))
                <input type="hidden" name="name" value="{{ request('name') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn rounded-2 border-0 btn-danger" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
