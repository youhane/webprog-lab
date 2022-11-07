@extends('layouts.base')
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3>Login</h3>
            <p style="margin: 0">Don't have an account? <a href="/register">Register Here</a></p>
        </div>
        <div class="card-body">
            <form action="/login" method="POST" class="form-registration">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email"
                        required value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter Your Password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
                <button type="submit" class="btn rounded-2 w-100 btn-primary">Submit</button>
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </form>
        </div>
    </div>
@endsection
