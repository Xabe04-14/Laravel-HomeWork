<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongController extends Controller
{
     public function tong(){
        return view('form');
     }
    
     public function tinhTong(Request $request){
        $number1=$request->input('num1',0);
        $number2=$request->input('num2',0);
        $result=$number1+$number2;

        return view('form', compact('result'));
     }
    }
