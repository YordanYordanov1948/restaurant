<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['restaurant_id', 'name', 'description', 'price', 'image'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
