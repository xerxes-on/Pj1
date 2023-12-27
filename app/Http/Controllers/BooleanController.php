<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//12 boolean
class BooleanController extends Controller
{
    public function b1(){
        $a = 4;
        echo var_dump($a >0);
    }
    public function b2(){

        $a = 3;
        echo var_dump($a % 2==1);
    }
    public function b3(){
        $a = 2;
        echo  var_dump($a % 2 ==0);
    }
    public function b4(){
        $a = 31;
        $result = $a % 2== 0;
        echo var_dump($result);

    }
    public function b5(){
        $a = 3;
        $b = 4;
        echo var_dump($a>=0 || $b <-2);

    }
    public function b6(){
        $a = 2;
        $b = 3;
        $res = ($a % 2 ==0 && $b % 2 == 1)||($a % 2 ==1 && $b % 2 == 0);

        echo var_dump($res);
    }
    public function b7(){
        $a =4;
        $b = 3;
        $c = 2;

        echo var_dump($a<$b && $b<$c);
    }
    public function b8(){
        $a = 6;
        $b = 5;


        $is_white =($a+$b) %2 == 1 ;


        echo var_dump($is_white);
    }
    public function b9(){
        $a = 4;
        $b = 3;
        echo var_dump($a %2 ==1 || $b % 2==1);
    }
    public function b10(){
        $a =2;
        $b = 5;

        echo var_dump($a % 2 == 1 && $b % 2==0 || $a % 2 == 0 && $b % 2==1);

    }
    public function b11(){

        $a =2;
        $b = 3;

        echo var_dump($a % 2==1 && $b % 2== 1 ||$a %2==0 && $b %2==0);
    }
    public function b12(){
        $a = 3;
        $b = 5;
        $c = -5;
        echo var_dump($a && $b && $c >0);
    }


}
