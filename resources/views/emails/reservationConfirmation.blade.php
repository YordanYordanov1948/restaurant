<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
</head>
<body>
    <h1>Reservation Confirmation</h1>
    <p>Thank you, {{ $reservation->name }}, for your reservation.</p>
    <p>We are looking forward to hosting you on {{ $reservation->date }} at {{ $reservation->time }}.</p>
    <p>Guests: {{ $reservation->guest_number }}</p>
    @if($reservation->special_requests)
    <p>Special Requests: {{ $reservation->special_requests }}</p>
    @endif
</body>
</html>
