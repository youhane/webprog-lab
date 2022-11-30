@extends('layouts.auth')
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3>Register</h3>
            <p style="margin: 0">Have an account? <a href="/login" style="text-decoration: underline;">Login here</a></p>
        </div>
        <div class="card-body">
            <form action="/register" method="POST" class="form-registration">
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
                    <div class="d-flex row w-50 mx-auto gap-4">
                        <div class="d-flex col gap-2">
                            <input type="radio" class="form-check-input" value="male" id="male" name="gender" required {{ old('gender') == 'male' ? 'checked' : '' }} >
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="d-flex col gap-2">
                            <input type="radio" class="form-check-input" value="female" id="female" name="gender" required {{ old('gender') == 'female' ? 'checked' : '' }} >
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                    </div>
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
                <button type="submit" class="btn rounded-2 w-100 btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
