<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
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

// get all
Route::get('/books', function(){
    return Book::all();
});
// create
Route::post('/books', function(){
    return Book::create([
        "user_id" => request('user_id'),
        "event_id" => request('event_id'),
        "hours" => request('hours'),
        "date" => request('date'),
    ]);
});