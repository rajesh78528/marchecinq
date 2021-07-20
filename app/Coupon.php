<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function store()
    {
       return $this->belongsTo('App\Store');
    }
    protected $guarded = [];
}
