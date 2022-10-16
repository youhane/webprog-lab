@extends('layouts.base')
@section('content')
    <h1>Ini dashboard</h1>
    {{-- Check if user is logged in --}}
    @if (Auth::check())
        <h2>Welcome {{ auth()->user()->name }}</h2>
        <form action="/logout" method="POST">
            @csrf
            <button class="nav-link btn btn-primary">Logout</button>
        </form>
    @endif
@endsection
