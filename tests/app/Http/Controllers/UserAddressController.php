<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\UserAddress;
use App\User;

class UserAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function index(Request $request)
    {
        $user = User::where("id", Auth::id())->first();
        $response = array();
        $response['status'] = false;
        $response['message'] = "";
        $data = array();
        if ($user) {
            $data = UserAddress::where('user_id', $user->id)->paginate(10);
            $response['status'] = true;
        } else {
            $response['message'] = "User not found";
        }
        if ($response['status']) {
            return response()->json($data);
        } else {
            return response()->json($response);
        }
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'address'=>"required|string|max:255",
            'addressName'=>"required|string|max:255",
            'apartment'=>"string|max:255",
            'city'=>"required|string|max:255",
            'country'=>"required|string|max:255",
        ]);

        $response = array();
        $response['status'] = false;
        $response['message'] = "";
        $user_id = 1;
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        DB::beginTransaction();
        try {
            $response['data'] = UserAddress::create([
                'address'=>$request->address,
                'address_name'=>$request->addressName,
                'apartment'=>$request->apartment,
                'street' => $request->street,
                'zone' => $request->zone,
                'city'=>$request->city,
                'country'=>$request->country,
                'lat'=>$request->lat,
                'lon'=>$request->lng,
                'user_id'=>$user_id
            ]);
            $response['status'] = true;
            DB::commit();
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            DB::rollback();
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
        $request->validate([
            'address'=>"required|string|max:255",
            'address_name'=>"required|string|max:255",
            'apartment'=>"string|max:255",
            'city'=>"required|string|max:255",
            'country'=>"required|string|max:255",
        ]);

        $response = array();
        $response['status'] = false;
        $response['message'] = "";
        DB::beginTransaction();
        try {
            $address = UserAddress::where("id", $id)->first();
            if (!$address) {
                $response['message'] = "Address not found";
                DB::rollback();
            } else {
                $address->update([
                    'address'=>$request->address,
                    'address_name'=>$request->address_name,
                    'apartment'=>$request->apartment,
                    'city'=>$request->city,
                    'country'=>$request->country,
                    'lat'=>$request->lat,
                    'lon'=>$request->lon
                ]);
                $response['status'] = true;
                $response['message'] = "Update success";
                DB::commit();
            }
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            DB::rollback();
        }
        return response()->json($response);
    }

    
    public function destroy($id)
    {
        $response = array();
        $response['status'] = false;
        $response['message'] = "";
        DB::beginTransaction();
        try {
            $address = UserAddress::where('id', $id)->first();
            if ($address) {
                $address->delete();
                DB::commit();
                $response['status'] = true;
            } else {
                DB::rollback();
                $response['message'] = "Address not found";
            }
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            DB::rollback();
        }

        return response()->json($response);
    }
}
