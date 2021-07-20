<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
   use Sluggable;
    protected $guarded = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    } 
    public function category()
    {
       return $this->belongsTo('App\Category');
    }
    public function sub_category()
    {
       return $this->belongsTo('App\SubCategory');
    }
    public function attributes()
    {
       return $this->hasMany('App\ProductAttribute');
    }
    public function combinations()
    {
       return $this->hasMany('App\ProductCombination');
    }
    public function image()
    {
       return $this->hasMany('App\ProductImage');
    }
    public function preview_images()
    {
       return $this->hasMany("App\ProductPreviewImage");
    }
    public function options()
    {
       return $this->hasMany('App\ProductOption')->with('option_value');
    }
    public function reviews()
    {
       return $this->hasMany('App\ProductReview');
    }
    public function size_guides()
    {
       return $this->hasMany('App\ProductSizeGuide');
    }
    public function fav()
    {
       return $this->hasOne('App\Favourite');
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
