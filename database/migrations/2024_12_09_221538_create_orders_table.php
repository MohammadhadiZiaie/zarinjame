<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('customer_id'); // ارتباط با کاربر
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); // وضعیت سفارش
            $table->dateTime('order_date'); // تاریخ سفارش
            $table->string('type'); 
            $table->dateTime('delivery_date')->nullable(); // تاریخ تحویل
            $table->foreignId('assigned_to')->nullable()->constrained('users'); // مسئول
            $table->foreignId('process_id')->nullable()->constrained('processes', 'id')->onDelete('set null');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
