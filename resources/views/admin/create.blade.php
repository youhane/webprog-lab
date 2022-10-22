@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Register</h1>
            <form action="/product" method="POST" class="form-registration">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                        required value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email"
                        required value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter Your Password" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm_pass" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_pass" name="confirm_pass"
                        placeholder="Re-type Your Password" required>
                </div>
                <div class="mb-3">
                    <p>Gender</p>
                    <input type="radio" class="form-check-input" value="male" id="male" name="gender" required>
                    <label for="male" class="form-check-label">Male</label>
                    <input type="radio" class="form-check-input" value="female" id="female" name="gender" required>
                    <label for="female" class="form-check-label">Female</label>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required
                        value="{{ old('dob') }}">
                    @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country" required>
                        @foreach ($categories as $category)
                            @if (old('category') == $category)
                                <option value="{{ $category }}" selected>{{ $category }}</option>
                            @else
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
