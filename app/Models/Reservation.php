<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date', 'time', 'guest_number', 'special_requests', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
