<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmationMail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guest_number = $request->guests;
        $reservation->special_requests = $request->message;
        $reservation->status = 'pending';
        $reservation->save();

        Mail::to($request->email)->send(new ReservationConfirmationMail($reservation));

        return response()->json(['message' => 'Reservation submitted successfully!'], 200);

    }
}
