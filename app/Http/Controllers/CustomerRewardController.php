<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerRewardPoint;
use Auth;
use DB;
use App\Order;
use Illuminate\Support\Facades\Validator;

class CustomerRewardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        if ($user_id) {
            $data = CustomerRewardPoint::where('user_id', $user_id)->get();
        } else {
            $data = CustomerRewardPoint::where('user_id', 1)
            ->get();
        }
        return $data;
    }
    public function store(Request $request)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';
        $auth_id=Auth::id();
        $user_order=Order::where('user_id', $auth_id)
        ->sum('total');
        $used_points=CustomerRewardPoint::where('user_id', $auth_id)
        ->where('type', 'reedem')
        ->sum('points');
        $validator = Validator::make($request->all(), [
            'points' => ['required'],
            'amount' => ['required'],
        ]);
        if ($validator->fails()) {
            $response['data'] = $validator->errors()->all();
            $response['status'] = 422;
            return response()->json($response);
        }
        if ($request->points>($user_order-$used_points)) {
            $response['data'] ='Sorry, not enough point to buy this';
            return response()->json($response);
        }


        DB::beginTransaction();
        try {
            $response['data']=CustomerRewardPoint::create(
                [
                    'user_id' => $auth_id,
                    'title_en' => $request->title_en,
                    'title_ar' => $request->title_ar,
                    'points' => $request->points,
                    'amount' => $request->amount,
                    'code' => 'R'.rand(1000, 9999)
                ]
            );
            DB::commit();
            $response['status'] = true;
        } catch (\Exception $e) {
            $response['data']=$e->getMessage();
            $response['status'] = false;
            DB::rollback();
        }
        return response()->json($response);
    }
    public function show($id)
    {
        $auth_id=Auth::id();
        $user_order=Order::where('user_id', $auth_id)
        ->sum('total');
        $used_points=CustomerRewardPoint::where('user_id', $auth_id)
        ->sum('points');
        $data= $user_order - $used_points;
        if ($data <0) {
            $data = 0;
        }
        return $data;
    }
}
