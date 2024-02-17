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

<!-- About Section -->
<div class="container my-5">
    <div class="row">
        <!-- Masonry Image List -->
        <div class="col-md-6 masonry">
            @for ($i = 1; $i <= 4; $i++)
            <div class="masonry-brick">
                <img src="{{ asset("images/photo{$i}.jpg") }}" alt="Our restaurant image {{ $i }}" class="img-fluid mb-3" />
            </div>
            @endfor
        </div>

        <!-- About Us Text -->
        <div class="col-md-6">
            <div class="about-text">
                <h2 class="text-uppercase text-primary mb-4">About Us</h2>
                <h3 class="mb-3">Welcome to Restorant</h3>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet.</p>
                <div class="about-stats">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <i class="fa-solid fa-calendar-check fa-2x text-primary mb-2"></i>
                            <h3 class="mb-0"><strong>15</strong></h3>
                            <p class="text-uppercase text-secondary">Years of Experience</p>
                        </div>
                        <div class="col-sm-6 text-center">
                            <i class="fa-solid fa-concierge-bell fa-2x text-primary mb-2"></i>
                            <h3 class="mb-0"><strong>50</strong></h3>
                            <p class="text-uppercase text-secondary">Master Chefs</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('about') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
