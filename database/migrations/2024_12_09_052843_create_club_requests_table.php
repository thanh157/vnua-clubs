<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('club_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên câu lạc bộ
            $table->text('description'); // Mô tả câu lạc bộ
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Trạng thái đơn (pending, approved, rejected)
            $table->integer('user_id'); // Người tạo đơn
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('club_requests');
    }
}
