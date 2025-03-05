<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('userss', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->string('email', 50)->unique();
            $table->string('address', 100);
            $table->string('phone_number', 20);
            $table->string('note', 200)->nullable();
            $table->foreignId('user_id')->nullable()->constrained('userss')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('type_products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('id_type')->constrained('type_products')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->float('unit_price');
            $table->float('promotion_price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('unit', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer')->constrained('customers')->onDelete('cascade');
            $table->foreignId('id_user')->nullable()->constrained('userss')->onDelete('set null'); 
            $table->date('date_order');
            $table->double('total');
            $table->string('payment', 200);
            $table->string('note', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('bill_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bill')->constrained('bills')->onDelete('cascade');
            $table->foreignId('id_product')->constrained('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('unit_price');
            $table->enum('status', ['Pending', 'Shipped', 'Delivered', 'Cancelled'])->default('Pending');
            $table->timestamps();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('content');
            $table->string('image', 255)->nullable();
            $table->foreignId('id_user')->constrained('userss')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('slide', function (Blueprint $table) {
            $table->id();
            $table->string('link', 100)->nullable();
            $table->string('image', 100);
            $table->foreignId('id_product')->nullable()->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('slide');
        Schema::dropIfExists('news');
        Schema::dropIfExists('bill_detail');
        Schema::dropIfExists('bills');
        Schema::dropIfExists('products');
        Schema::dropIfExists('type_products');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('userss');
    }
};
