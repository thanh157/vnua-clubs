<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); // Liên kết với bảng users
            $table->integer('club_id'); // Liên kết với bảng clubs
            $table->enum('status', ['pending', 'approved', 'rejected']); // Trạng thái đăng ký
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
