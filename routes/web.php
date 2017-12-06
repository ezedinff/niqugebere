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

Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
{
    // implement your reset password route here!
}]);
Route::get('/language/{lan}',array('Middleware' =>'LanguageMiddleware','uses'=>'LanguageController@store'));

Route::get('/', function () {
    if (app()->getLocale() == null){
        Illuminate\Support\Facades\Session::set("locale","en");
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin','UserController@admin');
Route::resource('/admin/zoneTranslation','ZoneTranslationController');



Route::get('/cfc','UserController@cfc');
Route::resource('/cfc/inventory','InventoryController');
Route::resource('/cfc/supply','SupplyController');
Route::resource('/cfc/demand','DemandController');
Route::resource('/cfc/slide','SlideController');
Route::resource('/cfc/cover','CoverController');
Route::resource('/cfc/logo','LogoController');


Route::get('/supplier','UserController@supplier');
Route::resource('/supplier/inventory','InventoryController');
Route::get('/supplier/demands','DemandController@cfcDemand');

