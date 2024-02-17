<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking.index');
    }

    public function store(Request $request)
{
    // Validate request data
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'date' => 'required|date',
        'time' => 'required',
        'guests' => 'required|integer|min:1',
        'message' => 'nullable',
    ]);

    return redirect()->route('home')->with('success', 'Booking successfully submitted!');
}

}
