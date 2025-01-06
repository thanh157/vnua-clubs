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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('description');
            $table->bigInteger('balance')->default(0);
            $table->foreignId('owner_id')->nullable()->constrained('users')->onDelete('cascade'); // Allow owner_id to be nullable
            $table->integer('likes')->default(0);
            $table->boolean('status')->default(false);
            $table->string('category')->nullable();; // Thêm cột category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
