<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name', 'description', 'image', 'category', 'price'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
