<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên sự kiện
            $table->dateTime('event_date'); // Ngày giờ sự kiện
            $table->text('description'); // Mô tả sự kiện
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade'); // Câu lạc bộ tổ chức sự kiện
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
