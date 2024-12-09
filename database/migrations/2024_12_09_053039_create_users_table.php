<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên người dùng
            $table->string('email')->unique(); // Email
            $table->string('password'); // Mật khẩu
            $table->foreignId('role_id')->constrained('roles'); // Khóa ngoại liên kết với bảng roles
            $table->rememberToken(); // Token nhớ đăng nhập
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Xóa bảng users
    }
}
