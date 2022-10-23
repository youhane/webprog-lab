@extends('layouts.auth')
@section('content')
    <h1>Edit Profile</h1>
    <form action="/profile" method="POST" class="form-registration">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required
                value="{{ $user->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required
                value="{{ $user->email }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" name="country" required>
                @foreach ($countries as $country)
                    @if (old('country') == $country)
                        <option value="{{ $country }}" selected>{{ $country }}</option>
                    @else
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endif
                @endforeach
            </select>
            @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn rounded-2 w-100 btn-primary">Edit Profile</button>
    </form>
@endsection
