<?php

use App\Enums\StatusActivity;
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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('image_url')->nullable();
            $table->string('time_note')->nullable();
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('location');
            $table->enum('status', array_map(fn($status) => $status->value, StatusActivity::cases()))
                ->default(StatusActivity::PLANNED);
            $table->integer('club_id');
            $table->bigInteger('budget')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
