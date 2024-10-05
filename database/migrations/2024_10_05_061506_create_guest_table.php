<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id('guest_id');  // This creates 'guest_id' as unsignedBigInteger primary key
            $table->string('username', 20)->unique();
            $table->string('password');
            $table->string('firstname', 50)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guests');
    }
};