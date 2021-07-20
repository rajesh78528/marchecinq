<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favourite;
use Auth;

class FavouriteController extends Controller
{
    
    public function index()
    {
        $user_id = Auth::id();
        $favourites = Favourite::with("product")->where('user_id',$user_id)->get()->pluck("product");
        return $favourites;
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>"required"
        ]);
        $user_id = Auth::id();
        $isPresent = Favourite::where('user_id',$user_id)->where('product_id',$request->product_id)->first();
        $response = array();
        $response['status'] = false;
        $response['messsage'] = "";
        if($isPresent){
            $response['message'] = "Item already added to favourite";
        }else{
            $response['data'] = Favourite::create([
                'user_id'=>$user_id,
                'product_id'=>$request->product_id
            ]);
            $response['status'] = true;
        }
        return response()->json($response);
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
        $response=array();
        $response['status']=false;
        $response['data'] = Favourite::find($id);
        if($response['data'])
        {
            $response['data'] = $response['data']->delete();
            $response['status']=true;
        }
        else
        {
            $response['message']="Favourite product doesn't exist";  
        }
        return response()->json($response);
    }
}
