<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EshopeeController extends Controller
{
    public function index(){
        return view('page.home-page');
    }
    public function login(){
        return view('page.login');
    }
    public function cart(){
        return view('page.cart');
    }
}
