<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/products" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('name'))
                <input type="hidden" name="name" value="{{ request('name') }}">
            @endif
            <div class="input-group d-flex">
                <div class="d-flex border w-75">
                    <input type="text" class="form-control border-0 rounded-0" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button type="button" class="bg-white px-3 border-0" onclick="this.form.search.value = ''"><i class="bi bi-x"></i></button>
                </div>
                <div class="input-group-append">
                    <button class="btn rounded-0 border-0 btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
