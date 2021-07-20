<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerRewardPoint extends Model
{
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
