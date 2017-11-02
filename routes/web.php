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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/house/{id}', function(){
	return view('house');

});

Route::get('api/payment/totalprice/{day_initial}&{dayfinal}&{price}', 'PaymentController@showTotalPrice');

/*
Route::get('/api/house/update/{id}', 'HouseController@update');

*/

/*Display all images from house_id*/
Route::get('/api/house/images/{house_id}','ImagesController@show');
/*Display house details from id*/
Route::get('/api/house/show/{id}', 'HouseController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Calendar */
Route::get('events', 'ReservaController@index');
