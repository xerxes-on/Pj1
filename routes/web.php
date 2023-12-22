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
Route::get('/if1/{x}&{y}', function ($x, $y) {
    if($x>$y){
        $max = $x;
        $min = $y;
    }else if($x<$y){
        $max = $y;
        $min = $x;
    }else{
        $max = "$x=$y";
    }
    echo "max :$max \n";
    echo "min :$min \n";
    return null;
});
Route::get('/if2/{x}&{y}&{z}', function ($x, $y,$z) {
    if($x > $y){
        if($x>$z){
            $max = $x;
        }else{
            $max = $z;
        }
    }else{
        if($y>$z){
            $max = $y;
        }else{
            $max = $z;
        }
    }
    return $max;
});
Route::get('/if3/{x}', function ($x) {
    if($x>0){
        echo $x+1;
    }elseif($x<0){
        echo $x-2;
    }else{
        echo $x = 10;
    }
    return null;
});
Route::get('/if4/{x}&{y}&{c}', function ($x, $y, $c) {
    $d = 0;
    if($x>0){
        $d++;
    }if($y>0){
        $d++;
    }if($c>0){
        $d++;
    }
    return $d;
});
Route::get('/if5/{x}&{y}', function ($a, $b, $c) {

    if($a>0){
        echo  $a **2 . " ";
    }
    if($b>0){
        echo $b**2 . " ";
    }
    if($c>0){
        echo $c**2 . " ";
    }
    
    return null;
});
Route::get('/if6/{x}&{y}', function ($x, $y) {
   return $x<$y ?$y:$x; 
});
Route::get('/if7/{x}&{y}', function ($x, $y) {
    if($x<$y){
        return $x . "inchi";
    }else{
        return $y . "inchi";

    }
});
Route::get('/if9/{x}&{y}', function ($a, $b) {
    if($a == $b){
    }else{
        if($a<$b){
            $c = $b;
            $a = $b;
            $b = $c;
        }
    }
    return "$a   $b";
});
Route::get('/if10/{x}&{y}', function ($a, $b) {
    if($a == $b){
        $a = 0;
        $b = $a;
    }else{
        $a += $b;
        $b = $a;
    }
    return "$a   $b";
});
Route::get('/int1/{x}', function ($l) {
    $m = floor($l / 100);
    echo " $m metres";
    return null;
});
Route::get('/int2/{x}', function ($kg) {
    $t = floor($kg / 1000);
    echo "$t tons";
    return null;
});
Route::get('/int3/{x}', function ($bites) {
    $kb = floor($bites / 1024);
    echo "$bites bites = $kb kb";    
    return null;
});
Route::get('/int4/{x}&{y}', function ($x, $y) {
    $c = floor($x/$y);
    echo " $c times";
    return null;
});
Route::get('/int5/{x}&{y}', function ($x, $y) {
    $c = floor($x/$y);
    $d = $x % $y;
    echo " $c times and $d will be left";
    
    return null;
});
Route::get('/int6/{x}', function ($a) {
    $last = $a % 10;
    $first = floor($a/10);
    echo"first = ".$first;
    echo "last = ".$last;
    return null;
});
Route::get('/int7/{x}', function ($a) {
    $last = $a % 10;
    $first = floor($a/10);
    $sum = $last + $first;
    echo "sum = " . $sum;
    return null;
});
Route::get('/int8/{x}', function ($a) {
    $last = $a % 10;
    $first = floor($a/10);
    $res = $last * 10 + $first;
    echo "$a ==== $res";
    return null;
});
Route::get('/int9/{x}', function ($a) {
    $r = floor($a  / 100);
    echo "result $r";    
    return null;
});
Route::get('/int10/{x}', function ($a) {
    $b = $a % 10;
    $c= floor(($a -floor($a / 100)*100) / 10);
    echo "$a  = $b and $c";
    return null;
});
