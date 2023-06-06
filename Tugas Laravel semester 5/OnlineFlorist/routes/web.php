<?php

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

//Honestly, I don't know what route is this
Auth::routes();

//Logging out
Route::get('/logout','RegisterController@logout')->middleware('checkGuestMiddleware');        

//Logging in
Route::get('/login','RegisterController@loggingin')->middleware('checkLoggedIn');
Route::post('/login','RegisterController@logginginSuccess')->middleware('checkLoggedIn');
Route::get('/loginconfirmed','MenuController@confirmlogin')->middleware('checkGuestMiddleware');

//User profile
Route::get('/profile','MenuController@showProfile')->middleware('checkGuestMiddleware');

//Update profile
Route::post('/profile/{user_id}','MenuController@updateProfile')->middleware('checkGuestMiddleware');

//Manage Flower
Route::get('/manageflower','MenuController@manageflower')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//To return search result in ManageFlower
Route::get('/manageflower/search','MenuController@searchmanageflower')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Update Flower
Route::get('/updateFlower/{flower_id}','MenuController@updateFlower')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/updateFlower/{flower_id}','MenuController@updateFlowerSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Delete Flower
Route::get('/viewdeleteflower/{flower_id}','MenuController@viewdeleteflower')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/deleteflower','MenuController@deleteflower')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Manage User
Route::get('/manageuser','MenuController@manageuser')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Update User
Route::get('/updateUser/{user_id}','MenuController@updateUser')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/updateUser/{user_id}','MenuController@updateProfile')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Delete User
Route::get('/viewdeleteuser/{user_id}','MenuController@viewdeleteuser')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/deleteuser','MenuController@deleteuser')->middleware('checkGuestMiddleware','checkAdminMiddleware');
//Homepage
Route::get('/','MenuController@showCategory')->middleware('checkGuestMiddleware');

//Flower Details
Route::get('/flowerdetails/{flower_id}','MenuController@showCategoryDetails')->middleware('checkGuestMiddleware');
Route::post('/flowerdetails/{flower_id}','MenuController@AddtoCart')->middleware('checkGuestMiddleware');

//To return search result in homepage
Route::get('/search','MenuController@showSearchCategory')->middleware('checkGuestMiddleware');

//Registration
Route::get('/register','RegisterController@registering')->middleware('checkLoggedIn');
Route::post('/register','RegisterController@registersuccess')->middleware('checkLoggedIn');

//Insert flower
Route::get('/insertFlower','MenuController@insertFlower')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/insertFlower','MenuController@insertFlowerSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//To return search result in manage courier
Route::get('/managecourier/search','MenuController@searchmanagecourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Manage Courier
Route::get('/managecourier','MenuController@managecourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Insert Courier
Route::get('/insertCourier','MenuController@insertCourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/insertCourier','MenuController@insertCourierSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Update Courier
Route::get('/updatecourier/{courier_id}','MenuController@updateCourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/updatecourier/{courier_id}','MenuController@updateCourierSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Delete Courier
Route::get('/viewdeletecourier/{courier_id}','MenuController@viewdeletecourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/deletecourier','MenuController@deletecourier')->middleware('checkGuestMiddleware','checkAdminMiddleware');


//Manage Flower Type
Route::get('/manageflowertype','MenuController@manageflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//To return search result in Manage Flower Type
Route::get('/manageflowertype/search','MenuController@searchmanageflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Insert Flower Type
Route::get('/insertFlowerType','MenuController@insertflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/insertFlowerType','MenuController@insertflowertypeSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Update Flower Type
Route::get('/updateFlowerType/{flower_type_id}','MenuController@updateflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/updateFlowerType/{flower_type_id}','MenuController@updateflowertypeSuccess')->middleware('checkGuestMiddleware','checkAdminMiddleware');

//Delete Flower Type
Route::get('/viewdeleteflowertype/{flower_type_id}','MenuController@viewdeleteflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');
Route::post('/deleteflowertype','MenuController@deleteflowertype')->middleware('checkGuestMiddleware','checkAdminMiddleware');
//Cart
Route::get('/cart','MenuController@showCart')->middleware('checkGuestMiddleware');
Route::get('/fcart/{flower_id}','MenuController@insertintocart')->middleware('checkGuestMiddleware');
Route::get('/deletecart/{cart_id}/{flower_id}','MenuController@viewdeletecart')->middleware('checkGuestMiddleware');
Route::post('/deletecart','MenuController@deletecart')->middleware('checkGuestMiddleware');
//Checkout from Cart
Route::get('/cart/{courier_id}','MenuController@checkoutcart')->middleware('checkGuestMiddleware');
Route::post('/checkout','MenuController@checkedout')->middleware('checkGuestMiddleware');
//Show Transaction History
Route::get('/transactionhistory','MenuController@transactionhistory')->middleware('checkGuestMiddleware','checkAdminMiddleware');