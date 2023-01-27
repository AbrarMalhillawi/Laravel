<?php
use App\Http\Controllers\admin\ActivityController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Session;

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


Route::get('/edit', function () {
    return view('edit_profile');
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/userShow', function () {
    return view('user_profile');    
});


// Route::get('/show', function () {
//     return view('role.show');
// });


// Route::get('/nav', function () {
//     return view('navbar');
// });
Route::get('/zzz', function () {
    // $value = session('key');
        // echo session('key') . "<br>";
        // echo session('user') . "<br>";
    // return session()->flush();
        // $users = User::all();
        // foreach($users as $user){
            // echo ($user->email  == "test2@gamil.com" && $user->password  == "Zohde123"). "<br>";
            // echo ($user->password  == "Zohde123"). "<br>";
        // }
    // return "hello";
    $sall = Session::get('user')->role;
    dd($sall);

});




Route::resource('activity',ActivityController ::class)->middleware('board');
Route::resource('user',UserController ::class)->middleware('board');


Route::get('/',[CustomAuthController::class,'home']);
Route::get('login',[CustomAuthController::class,'login']);
Route::get('event',[EventController::class,'index']);
// Route::get('show',[CustomAuthController::class,'show']);
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::post('postlogin', [CustomAuthController::class, 'signin'])->name('postlogin');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('event/{id}',[EventController::class,'show']);

// Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

// Route::get('/',[CustomAuthController::class,'home']);
// Route::get('login',[CustomAuthController::class,'login']);
// Route::post('postlogin', [CustomAuthController::class, 'signin'])->name('postlogin');