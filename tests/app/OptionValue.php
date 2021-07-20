<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $guarded = [];
    public function option(){
        return $this->belongsTo("App\Option");
    }
}
