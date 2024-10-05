<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');  // Primary key for bookings
            $table->unsignedBigInteger('guest_id')->nullable();  // Foreign key for guest
            $table->unsignedBigInteger('room_id')->nullable();   // Foreign key for room
            $table->date('check_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            
            // Correct the integer definition here
            $table->integer('adults')->default(1)->nullable();  // Corrected from int to integer
            $table->integer('kids')->default(0)->nullable();    // Corrected from int to integer
            
            $table->timestamps();

            // Foreign key referencing guest_id in guests table
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('set null');
            
            // Foreign key referencing room_id in rooms table
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
