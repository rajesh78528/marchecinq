<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Favourite;
use App\Store;
use App\ProductPrice;
use Auth;
use DB;
use Image;
use App\Option;

use App\Helpers\CollectionPaginate;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $data = array();
        if ($request->slug == "category_id") {
            $data = Product::active()->orderBy($request['sort_value'], $request['sort_type'])->with("preview_images")->where('category_id', $request->cat_id);
        } elseif ($request->slug == 'random') {
            $data = Product::active()->inRandomOrder()->orderBy($request['sort_value'], $request['sort_type'])->with("preview_images");
        } elseif ($request->slug == 'fav') {
            $user_id = Auth::id();
            $data=Favourite::with('product')
            ->where('user_id', $user_id)
            ->get()
            ->pluck('product');
            foreach ($data as $item) {
                $item['preview_images'] = $item->preview_images;
                $item['fav'] = $item->fav;
            }
        } else {
            $store=Store::where('slug', $request->slug)->first();
            $data=Product::active()->orderBy($request['sort_value'], $request['sort_type'])->with('preview_images')->where('store_id', $store->id);
        }
        if (isset($request->name) && !empty($request->name)) {
            $search='%'.$request->name.'%';
            $data=$data->where('name_en', 'like', $search)
            ->orWhere('overview_en', 'like', $search);
        }
        if (isset($request->price_start) && !empty($request->price_start)) {
            $price_start=$request->price_start;
            $data=$data->where('price', '>=', $price_start);
        }
        if (isset($request->price_end) && !empty($request->price_end)) {
            $price_end=$request->price_end;
            $data=$data->where('price', '<=', $price_end);
        }
        if (isset($request->category_id) && !empty($request->category_id)) {
            $category_id=$request->category_id;
            $data=$data->where('category_id', $category_id);
        }
        if (isset($request->size) && !empty($request->size)) {
            $data = $data->whereHas('combinations', function ($query) use ($request) {
                $query->where('combination', "LIKE", "%".$request->size."%");
            });
        }
        if (isset($request->color) && !empty($request->color)) {
            $data = $data->whereHas("combinations", function ($query) use ($request) {
                $query->where('combination', "LIKE", "%".$request->color."%");
            });
        }
        if ($request->slug != 'fav') {
            $data=$data->paginate(8);
        } else {
            $data = CollectionPaginate::paginate($data, 8);
        }

        if (Auth::check()) {
            foreach ($data as $item) {
                $item['fav'] = $item->fav()->where('user_id', Auth::id())->first();
            }
        }
        
        return $data;
    }

 

    public function newProduct()
    {
        $data=Product::active()->orderBy('id', 'DESC')->limit(5)->get();
        return $data;
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show($slug)
    {
        // dd($slug);
        $data=Product::active()->where('slug', $slug)
        ->with('attributes')
        ->with('combinations')
        ->with('preview_images')
        ->with('options')
        ->with('size_guides')
        ->first();

        return $data;
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function fixedVariants()
    {
        $options = Option::with('values')->orderBy("created_at", "DESC")->get();
        foreach ($options as $item) {
            $item->val = "";
        }
        return response()->json($options);
    }
}
