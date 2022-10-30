<div class="mb-4 {{ isset($hero) ? 'mb-lg-0' : 'p-0 mt-5' }}">
    <form action="/products" method="GET">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('name'))
            <input type="hidden" name="name" value="{{ request('name') }}">
        @endif
        <div class="input-group d-flex {{ isset($hero) ? '' : 'justify-content-center justify-content-lg-end' }}">
            @if (isset($hero))
                <label for="search" class="text-muted">Find what you need here!</label>
            @endif
            <div class="d-flex border border-2 {{ isset($hero) ? 'w-100 ps-3 rounded-5' : 'searchbar' }}">
                <input type="text" class="bg-transparent form-control border-0 rounded-0" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <button type="button" class="bg-white px-3 border-0 bg-transparent " onclick="this.form.search.value = ''">
                    <i class="bi bi-x"></i>
                </button>
                <button
                    class="btn rounded-0 border-0 btn-primary {{ isset($hero) ? 'rounded-pill d-flex align-items-center gap-2' : '' }}"
                    type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
