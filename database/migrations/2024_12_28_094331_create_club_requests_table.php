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
        Schema::create('club_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('owner_name');
            $table->string('owner_code');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->enum('status', array_map(fn($status) => $status->value, \App\Enums\StatusRequestClub::cases()))
                ->default(\App\Enums\StatusRequestClub::PENDING);
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
