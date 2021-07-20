<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Store extends Model
{
    use Sluggable;
    
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    public function store_brands()
    {
       return $this->hasMany('App\StoreBrand');
    }
    public function products()
    {
       return $this->hasMany('App\Product');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ]
        ];
    }
}
