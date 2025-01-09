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
            $table->string('use_for');
            $table->string('public_id');
            $table->unsignedBigInteger('create_user_id')->nullable();
            $table->unsignedBigInteger('use_for_id')->nullable();
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