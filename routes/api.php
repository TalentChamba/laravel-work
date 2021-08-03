<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('messages/total?period_start={created_at}/{id}', [ApiController::class,'getAllMessages']);
Route::get('messages/{created_at}/{id}/', [ApiController::class,'getMessages']);
Route::put('students/{id}', 'ApiController@updateStudent');
