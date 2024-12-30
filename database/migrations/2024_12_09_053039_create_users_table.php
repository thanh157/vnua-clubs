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
            $table->string('name');
            $table->string('code')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->enum('role', array_map(fn($role) => $role->value, Role::cases()));
            $table->integer('club_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Xóa bảng users
    }
}
