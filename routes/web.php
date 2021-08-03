<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetMessagesController;

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

Route::get('chart-js/{id}/{created_at}', [GetMessagesController::class, 'index']);
Route::get('chart-js/', [GetMessagesController::class, 'index']);
//Route::get('messages/{created_at}/{id}/', [ApiController::class,'getMessages']);
