<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHello;
use App\Http\Controllers\MyController;
use App\Http\Controllers\TongController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\ApiController;

use App\Http\Controllers\signupController;



Route::get('/form', [TongController::class, 'tong']);

Route::post('/form', [TongController::class, 'tinhTong']);
// Dùng route không dùng view
Route::get('/hello', function () {
    return "<h2>Hello Pnv</h2>";
});

// DÙNG controller không dùng view
Route::get(
    '/helo',
    [ControllerHello::class, 'hello']
);

// controller có with
Route::get(
    '/MyController',
    [MyController::class, 'index']
);


// route group

Route::group(['prefix'=>'tutorial'],function(){
    Route::get('/aws',function(){
        echo "aws tutorial";
    });
    Route::get('jira',function()
    {
        echo "jira tutorial";
    });
    Route::get('/testing',function(){
        echo"testing tutorial";
    });
});

// Route::get('/post',[PostController::class,'index']);
Route::get('/index',[PostController::class,'create']);

// signup Controller
Route::get('/signup',[signupController::class,'index']);
Route::post('/signup',[signupController::class,'displayInfor']);

// api
Route::get('/api',[ApiController::class,'getData']);

// Mockapi
use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);



