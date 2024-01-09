<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class PageController extends Controller
{
    public function index($number){
        return view('form')->with('products', $number);
    }
    public function formHanding(Request $request){
        $data = $request->all();
        // $prices = [];
        // $quantities = [];
        // $names = [];
        // $c = 1;
        // for($i = 1; $i < count($data)/3; $i++){
        //     $prices[] = $data['product' . $c . "_name"];
        //     $quantities[] = $data['quantity' . $c];
        //     $names[] = $data['price' . $c];

        //     $c++;
        // }
        return view('check')->with('allData', $data);
}
}
