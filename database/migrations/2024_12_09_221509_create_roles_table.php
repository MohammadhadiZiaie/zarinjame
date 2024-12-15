<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); 
            $table->text('description')->nullable(); 
            $table->enum('status', ['active', 'inactive'])->default('active'); 
            $table->unsignedBigInteger('parent_role_id')->nullable(); // شناسه نقش والد (در صورتی که زیرنقش باشد)
            $table->json('permissions')->nullable(); 
            $table->text('sub_roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
