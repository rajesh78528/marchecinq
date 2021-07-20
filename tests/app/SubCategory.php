<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class SubCategory extends Model
{
    use Sluggable;
    
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
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
