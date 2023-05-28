<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\Membercontroller;
use App\Http\Controllers\fileController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("list/{id?}",[Testcontroller::class,'list']);
Route::post("add_record",[Testcontroller::class,'add_record']);
Route::put("update_record",[Testcontroller::class,'update_record']);
Route::delete("delete_record/{id}",[Testcontroller::class,'delete_record']);
Route::get("search_record/{name}",[Testcontroller::class,'search_record']);
Route::post("api_form_validation/",[Testcontroller::class,'api_form_validation']);
Route::post("upload",[fileController::class,'upload']);

/*****Resource ****/
Route::apiResource("member",Membercontroller::class);