@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section -->
<div class="container-fluid p-0">
    <div class="hero-section" style="background-image: url('{{ asset('images/bg-hero.jpg') }}');">
        <div class="text-center">
            <div class="hero-text">
                <h1>Welcome to Our Restaurant</h1>
                <p>Experience the taste of luxury.</p>
                <a href="{{ route('booking') }}" class="btn btn-primary btn-lg">Book a Table</a>
            </div>
        </div>
    </div>
</div>


<!-- Cards Section -->
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-concierge-bell fa-3x mb-3"></i>
                    <h5 class="card-title">Master Chefs</h5>
                    <p class="card-text">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fa-solid fa-utensils fa-3x mb-3"></i>
                    <h5 class="card-title">Quality Food</h5>
                    <p class="card-text">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fa-solid fa-truck-fast fa-3x mb-3"></i>
                    <h5 class="card-title">Online Order</h5>
                    <p class="card-text">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fa-solid fa-clock fa-3x mb-3"></i>
                    <h5 class="card-title">24/7 Service</h5>
                    <p class="card-text">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
