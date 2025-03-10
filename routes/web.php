<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addController;
use App\Http\Controllers\CreateTableController;

Route::get('/baitap1', [addController::class, 'tong']);

Route::post('/baitap1', [addController::class, 'tinhTong']);

use App\Http\Controllers\EshopeeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Schema;

Route::get('index',[EshopeeController::class,'index']);
Route::get('cart',[EshopeeController::class,'cart']);
Route::get('login',[EshopeeController::class,'login']);


// Database
route::get('database',[CreateTableController::class,'create']);


route::get('/trangchu',[PageController::class,'getIndex']);
