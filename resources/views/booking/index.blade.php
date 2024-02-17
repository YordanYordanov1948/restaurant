@extends('layouts.app')

@section('title', 'Book a Table')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Book a Table</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="booking-form bg-light p-4 shadow rounded">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="mb-3">
                        <label for="guests" class="form-label">Number of Guests</label>
                        <input type="number" class="form-control" id="guests" name="guests" required min="1">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Special Requests</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
