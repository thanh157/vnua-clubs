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
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade'); // Câu lạc bộ
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Thành viên
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Trạng thái thành viên (pending, approved, rejected)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
