<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coupon;
use App\CustomerRewardPoint;
use App\OrderCoupon;
use Auth;
use Illuminate\Support\Facades\Validator;
use DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Coupon::orderBy('id', 'DESC')->limit(5)->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';
        $auth_id=Auth::id();
        $validator = Validator::make($request->all(), [
            'code' => ['required'],
            'title_en' => ['required'],
            'amount_type' => ['required'],
            'expiry_date' => ['required'],
            'amount' => ['required'],
            'quantity' => ['required'],
        ]);
        if ($validator->fails()) {
            $response['data'] = $validator->errors();
            return response()->json($response);
        }
        $request->validate([
        ]);
        DB::beginTransaction();
        try {
            $response['data']=Coupon::create(
                [
                    'store_id' => $request->store_id,
                    'code' => $request->code,
                    'title_en' => $request->title_en,
                    'title_ar' => $request->title_ar?$request->title_ar:$request->title_en,
                    'description_en' => $request->description_en,
                    'description_ar' => $request->description_ar?$request->description_ar:$request->description_en,
                    'image' => $request->image,
                    'amount_type' => $request->amount_type,
                    'amount' => $request->amount,
                    'quantity' => $request->quantity,
                    'expiry_date' => $request->expiry_date,
                    'status' => $request->status,
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function check(Request $request)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';
        $validator = Validator::make($request->all(), [
            'code' => ['required'],
            'amount' => ['required'],
        ]);
        if ($validator->fails()) {
            $response['data'] = $validator->errors();
            return response()->json($response);
        }
        if (substr($request->code, 0, 1) === "R") {
            if (Auth::check()) {
                $auth_id=Auth::user()->id;
                $reward=CustomerRewardPoint::where('user_id', $auth_id)
                ->where('code', $request->code)
                ->first();
                if ($reward) {
                    if ($reward->status) {
                        $response['status'] = true;
                        $response['data'] = $reward;
                    } else {
                        $response['data'] = "Coupon already used.";
                    }
                } else {
                    $response['data'] ='No reward found';
                }
            } else {
                $response['data'] ='Not authoried user';
            }
        } else {
            $coupon=Coupon::where('code', $request->code)->first();
            $total_order_coupon=OrderCoupon::where('code', $request->code)->count();
            if ($coupon) {
                if (Carbon::today()<$coupon->expiry_date && $total_order_coupon<$coupon->quantity && $request->amount>=$coupon->minimum_amount) {
                    $response['data']= $coupon;
                    $response['status'] = true;
                } else {
                    $response['data']= "Cannot apply this coupon";
                }
            } else {
                $response['data']="No Coupon found";
            }
        }

        
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response=array();
        $response['status']=false;
        $response['data'] ='';
        $auth_id=Auth::id();
        $validator = Validator::make($request->all(), [
            'code' => ['required'],
            'title_en' => ['required'],
            'amount_type' => ['required'],
            'expiry_date' => ['required'],
            'amount' => ['required'],
            'quantity' => ['required'],
        ]);
        if ($validator->fails()) {
            $response['data'] = $validator->errors();
            return response()->json($response);
        }
        $request->validate([
        ]);
        DB::beginTransaction();
        try {
            $response['data']=Coupon::where('id', $id)
            ->update(
                [
                    'store_id' => $request->store_id,
                    'code' => $request->code,
                    'title_en' => $request->title_en,
                    'title_ar' => $request->title_ar?$request->title_ar:$request->title_en,
                    'description_en' => $request->description_en,
                    'description_ar' => $request->description_ar?$request->description_ar:$request->description_en,
                    'image' => $request->image,
                    'amount_type' => $request->amount_type,
                    'amount' => $request->amount,
                    'quantity' => $request->quantity,
                    'expiry_date' => $request->expiry_date,
                    'status' => $request->status,
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response=array();
        $response['status']=false;
        $response['data'] = Coupon::find($id);
        if ($response['data']) {
            $response['data']=$response['data']->delete();
            $response['status']=true;
        } else {
            $response['data']="Banner not Exist";
        }
        return response()->json($response);
    }
}
