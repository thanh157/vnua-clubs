<?php

use App\Enums\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('code')->nullable()->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // Thêm cột email_verified_at
            $table->string('password');
            $table->string('phone')->nullable();
            $table->enum('role', array_map(fn($role) => $role->value, Role::cases()));
            // $table->integer('club_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Xóa bảng users
    }
}
