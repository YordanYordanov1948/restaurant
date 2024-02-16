<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'description', 'location', 'contact_number', 'email'];

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
