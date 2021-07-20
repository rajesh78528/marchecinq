<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/foo', function () {
// Artisan::call('storage:link');
// return 'done';
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index');

Route::get('/aboutus', function () {
    return view('about.aboutus');
});

Route::get('/store', function () {
    return view('store.list');
});

Route::get('/list/{slug}', function () {
    return view('product.list');
});
Route::get('/detail/{slug}', function () {
    return view('product.detail');
});

Route::get('/checkout', function () {
    return view('cart.checkout');
})->middleware("auth");

Route::get('/contactus', "ContactUsController@index");
Route::post('/contactus', "ContactUsController@store");

Route::get('/returns/{id}', "ReturnController@return");
Route::get('/termsnew/{id}', "ReturnController@return1");// By Rajesh
Route::get('/help', "ReturnController@help");
Route::get('/account/profile', function () {
    return view('account.profile');
});

Route::get("/fixed-variants", "ProductController@fixedVariants");

Route::get('lang/{locale}', 'HomeController@lang')->name("setlang");

Auth::routes();
Route::prefix('/app')->group(function () {
    Route::resource('/store', 'StoreController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
    Route::resource('/favourite', "FavouriteController");
    Route::resource('/order', 'OrderController');
    Route::resource('/offers', 'OfferController');
    Route::post("/coupon/check", "CouponController@check");
    Route::resource('/coupon', 'CouponController');
    Route::resource("/reward", "CustomerRewardController")->middleware("auth");
    Route::resource("/address", "UserAddressController");
    Route::get('/newproduct', 'ProductController@newProduct');
    Route::post('/updateprofile', 'UserController@update')->middleware("auth");
    Route::post('/logout', 'UserController@logout');
});
Route::get("/test", "HomeController@getInstaPosts");
Route::get('/profile', 'UserController@profile')->middleware("auth");
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home2', 'HomeController@index2')->name('home'); // By Rajesh
Route::get('/listnew/{slug}', function () {
    return view('product.listnew');
});// By Rajesh
Route::get('/detailnew/{slug}', function () {
    return view('product.detailnew');
});// By Rajesh
Route::get('/aboutusnew', function () {
    return view('about.aboutusnew');
});
Route::get('/account/profilenew', function () {
    return view('account.profilenew');
});
Route::get('/cart', function () {
    return view('cart.cartnew');
});
Route::get('/checkoutnew', function () {
    return view('cart.checkoutnew');
});
Route::get('/ordersnew', function () {
    return view('account.ordersnew');
});
Route::get('/storenew', function () {
    return view('store.listnew');
});
Route::get('/signup', "SignupController@index"); // By Rajesh
Route::get('/newlogin', "SignupController@login"); // By Rajesh
Route::get('/contactusnew', "ContactUsController@indexnew"); // By Rajesh
Route::get('/termsnew', "SignupController@termsnew"); // By Rajesh