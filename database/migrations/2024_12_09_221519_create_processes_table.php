
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // نام فرآیند
            $table->text('description')->nullable(); // توضیحات فرآیند
            $table->foreignId('assigned_to')->constrained('users')->nullable(); // کاربر مسئول
            $table->foreignId('assigned_by')->constrained('users')->nullable(); // کاربری که مسئولیت را تخصیص داده
            $table->foreignId('refer_to_user_id')->constrained('users')->nullable(); // ارجاع به کاربر دیگر
            $table->enum('status', ['pending', 'in_progress', 'completed', 'stopped'])->default('pending'); // وضعیت فرآیند
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
        Schema::dropIfExists('processes');
    }
}
