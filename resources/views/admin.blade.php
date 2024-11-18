<!-- resources/views/admin.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="admin-dashboard">
        <h2>Dashboard</h2>
        <div class="stats">
            <div class="stat">
                <h3>Number of Users</h3>
                <p>{{ $userCount }}</p>
            </div>
            <div class="stat">
                <h3>Number of Products</h3>
                <p>{{ $productCount }}</p>
            </div>
        </div>
    </div>
@endsection
