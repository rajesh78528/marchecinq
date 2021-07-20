<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpReturnValue extends Model
{
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
}
