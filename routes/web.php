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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    /**
     * User Routes
    */
    
    Route::get('/', 'UsersController@index')->name('index');
    Route::post('/serviceinfo_storage_filter','UsersController@serviceinfo_storage_filter');
    Route::post('/serviceinfo_ram_filter','UsersController@serviceinfo_ram_filter');
    Route::post('/serviceinfo_hdtype_filter','UsersController@serviceinfo_hdtype_filter');
    Route::post('/serviceinfo_location_filter','UsersController@serviceinfo_location_filter');
        
});
