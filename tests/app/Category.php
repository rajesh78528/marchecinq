<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Category extends Model
{
    use Sluggable;
    
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    public function sub_categories()
    {
       return $this->hasMany('App\SubCategory');
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
