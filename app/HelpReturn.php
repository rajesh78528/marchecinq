<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpReturn extends Model
{
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    public function help_return_values()
    {
       return $this->hasMany('App\HelpReturnValue');
    }
}
