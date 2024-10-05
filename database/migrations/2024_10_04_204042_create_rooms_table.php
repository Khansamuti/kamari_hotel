<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id'); // Auto-incrementing ID
            $table->string('room_type', 50)->nullable(); // Room type
            $table->decimal('price', 10, 2)->nullable(); // Price
            $table->enum('status', ['available', 'booked', 'maintenance'])->nullable(); // Status
            $table->text('facilities')->nullable(); // Facilities column
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
