<?php

use App\Http\Controllers\BooleanController;
use App\Http\Controllers\ForLoopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 Route::get('/', function () {
     return view('welcome');
 });
Route::get('/b1', [BooleanController::class,'b1']);
Route::get('/b2', [BooleanController::class,'b2']);
Route::get('/b3', [BooleanController::class,'b3']);
Route::get('/b4', [BooleanController::class,'b4']);
Route::get('/b5', [BooleanController::class,'b5']);
Route::get('/b6', [BooleanController::class,'b6']);
Route::get('/b7', [BooleanController::class,'b7']);
Route::get('/b8', [BooleanController::class,'b8']);
Route::get('/b9', [BooleanController::class,'b9']);
Route::get('/b10', [BooleanController::class,'b10']);
Route::get('/b11', [BooleanController::class,'b11']);
Route::get('/b12', [BooleanController::class,'b12']);


Route::get('f1', [ForLoopController::class, 'f1']);
Route::get('f2', [ForLoopController::class, 'f2']);
Route::get('f3', [ForLoopController::class, 'f3']);
Route::get('f4', [ForLoopController::class, 'f4']);
Route::get('f5', [ForLoopController::class, 'f5']);
Route::get('f6', [ForLoopController::class, 'f6']);
Route::get('f7', [ForLoopController::class, 'f7']);
Route::get('f8', [ForLoopController::class, 'f8']);
Route::get('f9', [ForLoopController::class, 'f9']);
Route::get('f10', [ForLoopController::class, 'f10']);
Route::get('f11', [ForLoopController::class, 'f11']);
Route::get('f12', [ForLoopController::class, 'f12']);
Route::get('f13', [ForLoopController::class, 'f13']);
Route::get('f14', [ForLoopController::class, 'f14']);
Route::get('f15', [ForLoopController::class, 'f15']);

//Route::get('f{n}',  [ForLoopController::class, 'f$n']);
