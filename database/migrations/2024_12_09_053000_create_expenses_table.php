<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade'); // Câu lạc bộ
            $table->string('title'); // Tiêu đề chi tiêu
            $table->decimal('amount', 10, 2); // Số tiền chi tiêu
            $table->text('description')->nullable(); // Mô tả chi tiết
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
