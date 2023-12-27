<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForLoopController extends Controller
{
    public function f1(){
        $k = 2;
        $n = 1;
        for($i = 0; $i < $n; $i++) {
            echo $k. "<br>";
        };

    }
    public function f2(){
        $a = 34;
        $b = 56;
        for($i = $a; $i <= $b; $i++){
            echo $i . "<br>";

        }
    }
    public function f3(){
        $a = 23;
        $b = 34;
        for($i = $b - 1; $i > $a; $i--)
        {
            echo $i . "<br>";
        }
    }
    public function f4(){
        $price = 3;
        for($i = 1; $i <= 10; $i++) {
            echo $i * $price . "<br>";
        }
        return 12;

    }
    public function f5(){
        $price = 3;
        for($i = 0.1; $i <= 1; $i+= 0.1) {
            echo $i * $price . "<br>";
        }
    }
    public function f6(){
        $price = 3;
        for($i = 1.2; $i <= 2; $i+= 0.2) {
            echo $i * $price . "<br>";
        }
    }
    public function f7(){
        $a = 3;
        $b = 3;
        $res = 0;
        for($i = $a; $i <= $b; $i++) {
            $res += $i;
        }
        echo $res;
    }
    public function f8(){
        $a = 3;
        $b = 3;
        $res = 1;
        for($i = $a; $i <= $b; $i++) {
            $res *= $i;
        }
        echo $res;
    }
    public function f9(){
        $a = 3;
        $b = 3;
        $res = 0;
        for($i = $a; $i <= $b; $i++) {
            $res += $i**2;
        }
        echo $res;
    }
    public function f10(){
        $n = 3;
        $res = 0;
        for($i = 1; $i <= $n; $i++) {
            $res += 1/$i;
        }
        echo $res;
    }
    public function f11(){
        $n = 3;
        $res = 0;
        for($i = 0; $i <= $n; $i++) {
            $res += ($n + $i)**2;
        }
        echo $res;
    }
    public function f12(){
        $n = 3;
        $res = 1;
        $count = 0;
        for($i = 1.1; $i < $n; $i+= 0.1) {
            $res *= $i;
            if($count == $n-1){
                break;
            }
            $count++;
        }
        echo $res;
    }
    public function f13(){
        $n = 5;
        $result = 0;

        for ($i = 1; $i <= $n; $i += 2) {
            $result += $i * 0.1 - ($i + 1) * 0.1;
        }

        echo  $result;
    }
    public function f14(){
        $n = 8;
        $res = 0;
        for($i=1; $i<=2*$n-1; $i+=2){
            $res += $i;
            // echo $res . "<br>";
        }
        echo $res;
    }
    public function f15(){
        $a = 3;
        $c = $a;
        $n = 5;
        for($i = 1; $i < $n; $i++) {
            $a *= $c;

        }
        echo $a;
    }
}
