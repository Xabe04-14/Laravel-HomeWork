<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function create(){
            Schema::create('productss',function($table){
                $table->increments('id');
                $table->string('name');
                $table->integer('price');
                $table->mediumText('content');
                $table->boolean('active');
                $table->timestamps();

            });
            echo"Da thuc hien tao bang thanh cong";
    }
}
    if (!schema::hasTable('products')){
        Schema::create('productss',function($table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->mediumText('content');
            $table->boolean('active');
            $table->timestamps();

        });
    }
