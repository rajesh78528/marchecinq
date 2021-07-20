<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
class StoreController extends Controller
{
    
    public function index(Request $request)
    {
        $data=Store::orderBy($request['sort_value'],$request['sort_type'])->where('status',1);
        if(isset($request->name) && !empty($request->name))
        {
            $search='%'.$request->name.'%';
            $data=$data->where('name_en','like',$search)
            ->orWhere('overview_en',  'like', $search);
        }
        if(isset($request->bysale) && !empty($request->bysale))
        {
            $q=$request->bysale;
            $data=$data->whereHas('products', function($q){
                $q->where('sale_price', '>', 0);
            });
        }
        $data=$data->paginate(5);
      
        
        return $data;
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
