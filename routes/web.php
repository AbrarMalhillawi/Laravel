<?php
use App\Http\Controllers\admin\ActivityController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CustomAuthController;
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

// Route::get('/', function () {
//     return view('landing');
// });


// Route::get('/log', function () {
//     return view('login-register');
// });


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});



// Route::get('/index', function () {
//     return view('role.index');
// });


// Route::get('/show', function () {
//     return view('role.show');
// });


// Route::get('/nav', function () {
//     return view('navbar');
// });




Route::resource('activity',ActivityController ::class);
Route::resource('user',UserController ::class);

Route::get('/',[CustomAuthController::class,'home']);
Route::get('login',[CustomAuthController::class,'login']);
Route::get('event',[CustomAuthController::class,'event']);
Route::get('show',[CustomAuthController::class,'show']);
Route::post('postlogin', [CustomAuthController::class, 'signin'])->name('postlogin');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');