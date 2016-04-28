<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','AdminController@index');
Route::get('/add', function () {
    return view('create');
});
Route::post('/create','AdminController@create');
Route::get('/delete/{id}', ['uses' =>'AdminController@delete']);
Route::get('/get/{id}', ['uses' =>'AdminController@get']);
Route::post('/update','AdminController@update');





Route::get('/NearMe','PublicController@nearMe');
Route::get('/Gallery','PublicController@gallery');

//service mobile
Route::post('/upload','PublicController@upload');
Route::get('/getMap','ServiceController@getMap');
Route::post('service/mobile/login','ServiceController@login');
Route::get('service/mobile/report','ServiceController@reportPhoto');
Route::get('service/mobile/gallery','ServiceController@gallery');
Route::group(array('prefix'=>'service'),function(){
	Route::resource('mobile','ServiceController',
         [
         	/*'names' => [
         		'create' => 'mobile.register',
         		'index' => 'mobile.timeline'
         	],
         	'only' => [
         		'index', 'show', 'create', 'store'
         	]*/
         ]
	);
});

//route site
Route::post('/Login','SiteCont@loginUser');
Route::get('/LoginPage','SiteCont@loginPage');
Route::get('/Logout','SiteCont@logoutUser');

//route admin
Route::get('/adminPage','AdminController@index');
Route::get('/adminPhoto','AdminController@photo');
Route::get('/adminReport','AdminController@report');
Route::get('/adminActionReport/{id_photo}/{id_status}', ['uses' =>'AdminController@actionReport']);