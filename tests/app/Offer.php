<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    protected $guarded = [];
}
