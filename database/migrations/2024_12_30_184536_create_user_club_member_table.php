<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\RoleClub;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_club_member', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('club_id')->constrained()->onDelete('cascade');
            $table->enum('role', array_map(fn($role) => $role->value, RoleClub::cases()));
            $table->boolean('is_active')->default(true);
            $table->boolean('is_blocked')->default(false);
            $table->timestamps();

            // Thêm ràng buộc unique cho cặp user_id và club_id
            $table->unique(['user_id', 'club_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_club_member');
    }
};
