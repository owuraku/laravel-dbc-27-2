<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FoodController;

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

Route::get('/foods',[FoodController::class, 'getAllFoods'])
->name('allFoods');

Route::get('/add-foods',[FoodController::class, 'getAddFoodForm'])
->name('addFood');

Route::delete('/foods/{id}',[FoodController::class, 'deleteFood'])
->name('deleteFood');

Route::get('/foods/edit/{food}',[FoodController::class, 'getEditFoodForm'])
->name('editFood');

Route::put('/foods/edit',[FoodController::class, 'updateFood'])
->name('editFoodAction');

Route::post('/addFoods',[FoodController::class, 'addFood'])->name('addFoodAction');

Route::get('/request', [TestController::class, 'requestObject']);

Route::get('/welcome', [TestController::class, 'displayUsername'] )
->name('welcome');

Route::get('/vote', [TestController::class, 'vote'] )
->middleware(['verifyAge'])
->name('vote');

// Route::get('/orderfood',[TestController::class, 'showOrderFood']);
Route::get('/orderfood/{age}',[TestController::class, 'showOrderFood']);

Route::get('/orderfood/{food}/{size}', function ($food, $size){
    return "Order placed for {$food}. Size is {$size}";
    // return "Order placed for ".$food. ". Size is ". $size;

});

require __DIR__.'/auth.php';
