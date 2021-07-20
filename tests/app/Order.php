<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    public function products()
    {
       return $this->hasMany('App\OrderProduct');
    }

    public function store(){
        return $this->belongsTo("App\Store");
    }

}
