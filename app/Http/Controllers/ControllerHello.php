<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHello extends Controller
{
    public function hello(){
        return('<h3>Hello PNV<h3/>');
    }

}
