<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('price');
            $table->string('image');
            $table->unsignedBigInteger('cate_id'); // Đảm bảo khóa ngoại là UNSIGNED BIGINT
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }        
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product2');
    }
};
