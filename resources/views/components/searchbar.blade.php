<div class="p-0 mt-5 mb-4">
    <form action="/products" method="GET">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('name'))
            <input type="hidden" name="name" value="{{ request('name') }}">
        @endif
        <div class="input-group d-flex justify-content-center justify-content-lg-end">
            <div class="d-flex border border-2 searchbar">
                <input type="text" class="form-control border-0 rounded-0" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <button type="button" class="bg-white px-3 border-0" onclick="this.form.search.value = ''">
                    <i class="bi bi-x"></i>
                </button>
                <button class="btn rounded-0 border-0 btn-primary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
