<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('club_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('owner_name');
            $table->string('owner_code');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->enum('status', ['pending', 'approved']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('club_requests');
    }
};
