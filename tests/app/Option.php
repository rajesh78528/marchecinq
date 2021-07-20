<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = [];
    public function values(){
        return $this->hasMany("App\OptionValue");
    }
}
