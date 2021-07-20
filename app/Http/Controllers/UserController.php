<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use DB;
use Auth;
use Mail;
use Session;
use Redirect;

class UserController extends Controller
{
    public function profile()
    {
        $profiledata=User::where("id", Auth::id())->with("address")->first();
        
        return view('account/profile', [
            'profiledata' => $profiledata
        ]);
    }

    public function address()
    {
        $user = Auth::user();
        $addresses = $user->address()->get();
        return view("account.address", compact("addresses"));
    }

    public function update(Request $request)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'country' => ['required']
        ]);

        if ($validator->fails()) {
            $response['data'] = $validator->errors();
            $response['status'] = 422;
            return response()->json($response);
        }

        DB::beginTransaction();
        try {
            $user = Auth::user();
            $response['data']=$user->update([
                'name'=>  $request->name,
            ]);
            if (count($user->address) > 0) {
                $address = $user->address()->first();
                $address->update([
                    'address' => $request->address,
                    'city' => $request->city,
                    'country' => $request->country
                ]);
            } else {
                $user->address()->create([
                    'address' => $request->address,
                    'address_name' => "Default",
                    'city' => $request->city,
                    'country' => $request->country,
                ]);
            }
            DB::commit();
            $response['status'] = true;
        } catch (\Exception $e) {
            $response['data']=$e->getMessage();
            $response['status'] = false;
            DB::rollback();
        }
        return response()->json($response);
    }

    
    public function logout(Request $request)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';
        DB::beginTransaction();
        try {
            Auth::logout();
            Session::flush();
            
            DB::commit();
            $response['status'] = true;
        } catch (\Exception $e) {
            $response['data']=$e->getMessage();
            $response['status'] = false;
            DB::rollback();
        }
        return response()->json($response);
    }
}
