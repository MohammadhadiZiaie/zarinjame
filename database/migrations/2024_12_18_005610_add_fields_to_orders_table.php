<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('project_code_before')->nullable(); // کد پروژه قبل
            $table->string('technical_code')->nullable(); // کد فنی
            $table->string('product_code')->nullable(); // کد کالا
            $table->text('notes')->nullable(); // توضیحات
            $table->json('services')->nullable(); // خدمات (چاپ، بسته‌بندی، برون سپاری) در قالب آرایه
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['project_code_before', 'technical_code', 'product_code', 'notes', 'services']);
        });
    }
}
