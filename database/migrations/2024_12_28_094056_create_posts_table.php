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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('reference_url')->nullable();
            $table->integer('status')->default(0);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Tham chiếu tới bảng users
            $table->foreignId('club_id')->nullable()->constrained('clubs')->onDelete('cascade'); // Tham chiếu tới bảng clubs và cho phép null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
