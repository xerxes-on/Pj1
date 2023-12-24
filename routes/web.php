<?php

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
Route::prefix('/husband')->name('husband')->group(function (){

    Route::get('/friend', function (){
        return view('husband.friend');
    });
    Route::get('/friend2', function (){
        return view('husband.friend2');
    });
    Route::get('/friend3', function (){
        return view('husband.friend3');
    });
    Route::get('/friend4', function (){
        return view('husband.friend4');
    });
    Route::get('/friend5', function (){
        return view('husband.friend5');
    });
    Route::get('/friend6', function (){
        return view('husband.friend6');
    });
    Route::get('/friend7', function (){
        return view('husband.friend7');
    });
    Route::get('/friend8', function (){
        return view('husband.friend8');
    });
    Route::get('/friend9', function (){
        return view('husband.friend9');
    });
    Route::get('/friend10', function (){
        return view('husband.friend10');
    });
});
Route::prefix('/son')->name('son')->group(function (){

    Route::get('/friend', function (){
        return view('son.friend');
    });
    Route::get('/friend2', function (){
        return view('son.friend2');
    });
    Route::get('/friend3', function (){
        return view('son.friend3');
    });
    Route::get('/friend4', function (){
        return view('son.friend4');
    });
    Route::get('/friend5', function (){
        return view('son.friend5');
    });
    Route::get('/friend6', function (){
        return view('son.friend6');
    });
    Route::get('/friend7', function (){
        return view('son.friend7');
    });
    Route::get('/friend8', function (){
        return view('son.friend8');
    });
    Route::get('/friend9', function (){
        return view('son.friend9');
    });
    Route::get('/friend10', function (){
        return view('son.friend10');
    });
});
Route::prefix('/wife')->name('wife')->group(function (){

    Route::get('/friend', function (){
        return view('wife.friend');
    });
    Route::get('/friend2', function (){
        return view('wife.friend2');
    });
    Route::get('/friend3', function (){
        return view('wife.friend3');
    });
    Route::get('/friend4', function (){
        return view('wife.friend4');
    });
    Route::get('/friend5', function (){
        return view('wife.friend5');
    });
    Route::get('/friend6', function (){
        return view('wife.friend6');
    });
    Route::get('/friend7', function (){
        return view('wife.friend7');
    });
    Route::get('/friend8', function (){
        return view('wife.friend8');
    });
    Route::get('/friend9', function (){
        return view('wife.friend9');
    });
    Route::get('/friend10', function (){
        return view('wife.friend10');
    });
});
