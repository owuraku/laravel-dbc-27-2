<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/welcome', [TestController::class, 'displayUsername'] )
->name('welcome');

// Route::get('/orderfood',[TestController::class, 'showOrderFood']);
Route::get('/orderfood/{age}',[TestController::class, 'showOrderFood']);

Route::get('/orderfood/{food}/{size}', function ($food, $size){
    return "Order placed for {$food}. Size is {$size}";
    // return "Order placed for ".$food. ". Size is ". $size;

});
