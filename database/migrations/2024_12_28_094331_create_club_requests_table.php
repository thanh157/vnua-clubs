<?php

use App\Enums\StatusRequestClub;
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
        Schema::create('club_requests', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->text('description')->nullable();
            $table->string('category');
            $table->string('activity_time');
            $table->string('logo')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status', array_map(fn($role) => $role->value, StatusRequestClub::cases()))->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_requests');
    }
};
