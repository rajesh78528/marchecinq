<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreBrand extends Model
{
    protected $guarded = [];
    public function store()
    {
       return $this->belongsTo('App\Store');
    }
}
