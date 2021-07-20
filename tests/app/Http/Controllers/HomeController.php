<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use InstagramScraper\Instagram;
use App\Banner;
use App\Offer;
use App\HomePage;
use App\Coupon;
use App\Category;
use App\Product;
use Auth;
use DB;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners=Banner::where('type', 1)->get();
        $categories = Category::get();
        $homedata=HomePage::get();
       /* $data = Session::all();
        echo "<pre>";print_r($data);//die;*/
        $coupon=Coupon::orderBy('id', 'DESC')->limit(5)->get();
        $offer=Offer::orderBy('id', 'DESC')->limit(5)->get();

        $picks = Product::active()->orderBy("created_at", "DESC")->limit(4)->get();
       // echo "<pre>";print_r($picks);die;
        // $insta = $this->getInstaPosts();
        // return $insta;
      
      
        return view('home', [
            'banners' => $banners,
            'homedata' => $homedata,
            'coupon' => $coupon,
            'offer' => $offer,
            'categories'=>$categories,
            'picks'=>$picks,
        ]);
    }

    public function index2(){
        //echo 63;
        $banners=Banner::where('type', 1)->get();
        //echo "<pre>";print_r($banners);die;
        $categories = Category::get();
        $homedata=HomePage::get();
        $coupon=Coupon::orderBy('id', 'DESC')->limit(5)->get();
        $offer=Offer::orderBy('id', 'DESC')->limit(5)->get();

        $picks = Product::active()->orderBy("created_at", "DESC")->limit(4)->get();

        // $insta = $this->getInstaPosts();
        // return $insta;
      
      
        return view('home2', [
            'banners' => $banners,
            'homedata' => $homedata,
            'coupon' => $coupon,
            'offer' => $offer,
            'categories'=>$categories,
            'picks'=>$picks,
        ]);
    }

    public function getInstaPosts()
    {
        $res = $this->getDetails("https://instagram.com/marchecinq");
        return $res;
    }

    
    public function getDetails($pageUrl)
    {
        $url = $pageUrl;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $output;
        $metaPos = strpos($result, "<meta content=");
        if ($metaPos != false) {
            $meta = substr($result, $metaPos, 70);

            //meghdare followers
            $followerPos = strpos($meta, "Followers");
            $followers = substr($meta, 15, $followerPos-15);
            $output[0] = $followers;

            //meghdare followings
            // $commaPos = strpos($meta , ',');
            $followingPos = strpos($meta, 'Following');
            $followings = substr($meta, $followerPos+10, $followingPos - ($followerPos+10));
            $output[1] = $followings;


            //meghdare posts
            $seccondCommaPos = $followingPos + 10;
            $postsPos = strpos($meta, 'Post');
            $posts = substr($meta, $seccondCommaPos, $postsPos - $seccondCommaPos);
            $output[2] = $posts;
        
            //image finder
            $imgPos = strpos($result, "og:image");
            $image = substr($result, $imgPos+19, 200);
            $endimgPos = strpos($image, "/>");
            $finalImagePos = substr($result, $imgPos+19, $endimgPos-2);
            $output[3] = $finalImagePos;

            return $output;
        } else {
            return null;
        }
    }


    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
