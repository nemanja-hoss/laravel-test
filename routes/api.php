<?php

use App\Http\Controllers\auth_controller;
use App\Http\Controllers\tag_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[auth_controller::class,'login']);
Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::resource('tags', tag_controller::class);
});
