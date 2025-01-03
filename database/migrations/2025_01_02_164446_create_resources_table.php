<?php

use App\Enums\ResourceType;
use App\Enums\ResourceUseFor;
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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('public_url');
            $table->string('secure_url');
            $table->enum('type', array_map(fn($type) => $type->value, ResourceType::cases()));
            $table->enum('useFor', array_map(fn($for) => $for->value, ResourceUseFor::cases()));
            $table->string('public_id');
            $table->unsignedBigInteger('club_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('activity_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};