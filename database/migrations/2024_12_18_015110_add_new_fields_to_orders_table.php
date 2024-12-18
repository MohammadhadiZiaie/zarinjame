<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // مرحله 1 فیلدها
            $table->string('product_name');
            $table->unsignedBigInteger('previous_order_id')->nullable()->after('customer_id');
            $table->foreign('previous_order_id')->references('id')->on('orders')->onDelete('set null');

            // مرحله 2 فیلدها
            $table->string('size_scheme')->nullable();
            $table->integer('quantity')->nullable();
            $table->json('main_fabric')->nullable(); // آرایه‌ای از ردیف‌ها (type, code, color)
            $table->json('additional_fabric')->nullable(); // آرایه‌ای از ردیف‌ها (type, code, color)
            

            // مرحله 4 فیلدها
            $table->json('indirect_materials')->nullable(); // آرایه‌ای از ردیف‌ها (type, size, quantity, row, description)
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'product_name',
                'previous_order_id',
                'size_scheme',
                'quantity',
                'main_fabric',
                'additional_fabric',
                'services',
                'indirect_materials',
            ]);
        });
    }
}
