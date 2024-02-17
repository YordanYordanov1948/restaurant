@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <h3 class="text-center text-muted mb-5">Explore Our Services</h3>
    <div class="row g-4">
        @php
        $services = [
            ['icon' => 'fa-utensils', 'title' => 'Master Chefs', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.'],
            ['icon' => 'fa-utensils', 'title' => 'Quality Food', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.'],
            ['icon' => 'fa-truck-fast', 'title' => 'Online Order', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.'],
            ['icon' => 'fa-clock', 'title' => '24/7 Service', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam.'],
        ];
        @endphp

        @foreach ($services as $service)
        <div class="col-md-6 col-lg-3">
            <div class="card service-card text-center h-100">
                <div class="card-body">
                    <i class="fa-solid {{ $service['icon'] }} fa-3x mb-3"></i>
                    <h5 class="card-title">{{ $service['title'] }}</h5>
                    <p class="card-text">{{ $service['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
