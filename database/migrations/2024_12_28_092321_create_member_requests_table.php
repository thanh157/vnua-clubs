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
            $table->string('full_name');
            $table->string('student_id');
            $table->string('class_name');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('avatar')->nullable();
            $table->string('faculty');
            $table->text('purpose');
            $table->foreignId('club_id')->constrained('clubs');
            $table->enum('status', array_map(fn($status) => $status->value, StatusMemberRequest::cases()))
                ->default(StatusMemberRequest::PENDING);
            $table->foreignId('user_id')->constrained('users');
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
