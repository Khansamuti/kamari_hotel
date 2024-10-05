<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('name');               // Name of the guest
            $table->string('email');              // Email of the guest
            $table->string('phone');              // Phone number of the guest
            $table->date('check_in_date');       // Check-in date
            $table->date('check_out_date');      // Check-out date
            $table->integer('adults');            // Number of adults
            $table->integer('kids')->default(0);  // Number of kids (default 0)
            $table->integer('number_of_rooms');   // Number of rooms booked
            $table->string('room_id');            // Room type (you might want to define this more specifically based on your room structure)
            $table->timestamps();                  // Created at and updated at timestamps
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
}
