<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Store;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->slug);
        $store=Store::where('slug', $request->slug)->first();
        if ($store) {
            $product=Product::active()->where('store_id', $store->id)->get();
            $cat_id=$product->pluck('category_id');
            $data=Category::wherein('id', $cat_id)
            ->with('sub_categories')
            ->get();
            return $data;
        } else {
            $data = Category::with("sub_categories")->get();
            return $data;
        }
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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
}
