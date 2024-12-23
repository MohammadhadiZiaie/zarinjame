<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // ارتباط با سفارش
            $table->enum('status', ['pending', 'generated'])->default('pending'); // وضعیت قرارداد
            $table->dateTime('contract_date')->nullable(); // تاریخ قرارداد
            $table->text('contract_details')->nullable(); // جزئیات قرارداد
            $table->timestamps();
            
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
