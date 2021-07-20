<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $guarded = [];
    public function option_value()
    {
       return $this->hasMany('App\ProductOptionValue');
    }
}
