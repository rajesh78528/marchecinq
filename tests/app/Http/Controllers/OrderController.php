<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Order;
use App\OrderProduct;
use Auth;
use App\CustomerRewardPoint;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth", ["only" => ["index"]]);
    }
   
    public function index()
    {
        $orders = Order::active()
        ->where("user_id", Auth::id())
        ->with("products")
        ->with("store")
        ->paginate(10);
        return view("product.order", compact("orders"));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {

        // dd($request->all());
        $response=array();
        $response['status']=false;
        $response['data'] ='';

        $user_id= 1;
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        $validator = Validator::make($request->all(), [
            'store_id' => ['required'],
            'full_name' => ['required'],
            'mobile' => ['required'],
            'email' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
        ]);
        if ($validator->fails()) {
            $response['data'] =$validator->errors()->all();
            $response['status'] = 422;
            return response()->json($response, 200);
        }
        DB::beginTransaction();
        try {
            $rewardAmount = 0;
            if ($request->total_amount > 1000) {
                $rewardAmount = $request->total_amount / 100;
                $request->total_amount = $request->total_amount - $rewardAmount;
            }
            $response['data']=Order::create([
                
                'user_id' => $user_id,
                'store_id' => $request->store_id,
                'full_name'=>  $request->full_name,
                'address' => $request->address,
                'address_name' => isset($request->company)?$request->company:'None',
                'email' => $request->email,
                'phone' => $request->mobile,
                'sub_total' => 0,
                'shipping_type' => 'None',
                'apartment' => $request->country!="Qatar"?$request->apartment:'Zone No: '.$request->zone_no.' Building No: '.$request->building_no.' Street No: '. $request->street_no,
                'city' => $request->city,
                'country' => $request->country,
                'total' => $request->total_amount,
                'reward_amount' => $rewardAmount,
                'lat' => isset($request->lat)?$request->lat:0,
                'lon' => isset($request->lon)?$request->lon:0,
                'order_status' => 4,
                'delivery_agent' => 0,
                'ip' => isset($request->ip)?$request->ip:'0',
                'note' => isset($request->note)?$request->note:'0',
            ]);
            if (isset($request->cartData) && count($request->cartData)) {
                foreach ($request->cartData as $product) {
                    // dd($product);
                    OrderProduct::create([
                        'order_id' =>  $response['data']->id,
                        'store_id' => $product['store_id'],
                        'product_id' => $product['product_id'],
                        'name_en' => $product['name_en'],
                        'name_ar' => $product['name_ar'],
                        'description_en' => $product['description_en'],
                        'description_ar' => $product['description_ar'],
                        'combination' => isset($product['combination'])?$product['combination']:'None',
                        'preview_image' => $product['image'],
                        'quantity' => $product['quantity'],
                        'price' => $product['product_price'],
                        'total' => $product['sub_total']
                    ]);
                }
            }

            if (isset($request->coupon) && !empty($request->coupon)) {
                if (substr($request->coupon, 0, 1) === "R") {
                    CustomerRewardPoint::where('code', $request->coupon)
                    ->update(
                        [
                            'status' => 0
                        ]
                    );
                } else {
                    $coupon=Coupon::where('code', $request->coupon)->first();
                    if ($coupon) {
                        OrderCoupon::create([
                            'order_id' =>  $response['data']->id,
                            'coupon_id' =>  $coupon->id,
                            'code' =>  $request->coupon,
                            'name_en' => $coupon->title_en,
                            'name_ar' => $coupon->title_ar,
                            'description_en' => $coupon->description_en,
                            'description_ar' => $coupon->description_ar,
                            'image' => $coupon->image,
                            'amount_type' => $coupon->amount_type,
                            'amount' => $coupon->amount,
                        ]);
                    }
                }
            }
            
            
                  
            DB::commit();
            $response['status'] = true;
        } catch (\Exception $e) {
            $response['data']=$e->getMessage().', Line: '.$e->getLine();
            $response['status'] = false;
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
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
