@extends('layouts.auth')
@section('content')
    <h1>Edit Profile</h1>
    <form action="/profile/{{ $user->id }}" method="POST" class="form-registration">
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
            <p>Gender</p>
            <div class="d-flex gap-4">
                <div class="d-flex gap-2">
                    @if ($user->gender == 'male')
                        <input type="radio" class="form-check-input" value="male" id="male" name="gender" required
                            checked>
                    @else
                        <input type="radio" class="form-check-input" value="male" id="male" name="gender"
                            required>
                    @endif
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="d-flex gap-2">
                    @if ($user->gender == 'female')
                        <input type="radio" class="form-check-input" value="female" id="female" name="gender" required
                            checked>
                    @else
                        <input type="radio" class="form-check-input" value="female" id="female" name="gender"
                            required>
                    @endif
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required value="{{ $user->dob }}">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" name="country" required>
                @foreach ($countries as $country)
                    @if ($user->country == $country)
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
