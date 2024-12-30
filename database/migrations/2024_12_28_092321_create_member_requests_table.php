<?php

use App\Enums\StatusMemberRequest;
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
        Schema::create('member_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('email');
            $table->string('phone');
            $table->enum('status', array_map(fn($status) => $status->value, StatusMemberRequest::cases()))
                ->default(StatusMemberRequest::PENDING);
            $table->integer('club_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_requests');
    }
};
