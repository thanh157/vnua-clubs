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
            $table->text('description')->nullable();
            $table->decimal('balance', 15, 2)->default(0);
            $table->integer('member_limit')->default(100);
            $table->integer('award_amount')->default(0);
            $table->integer('future_project_amount')->default(0);
            $table->integer('event_amount')->default(0);
            $table->string('category')->nullable();
            $table->string('address')->nullable();
            $table->integer('projects_completed')->default(0);
            $table->date('founded_date')->nullable();
            $table->string('content_type')->nullable();
            $table->text('community_purpose')->nullable();
            $table->text('skill_improvement')->nullable();
            $table->text('vision')->nullable();
            $table->text('core_values')->nullable();
            $table->string('slogan')->nullable();
            $table->text('mission')->nullable();
            $table->text('activity_info')->nullable();
            $table->integer('likes')->default(0);
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('set null');
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
