<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade'); // Reference to bookings table
            $table->string('bank');
            $table->string('virtual_account');
            $table->decimal('total_amount', 10, 2);
            $table->timestamps();

            // Foreign key constraint jika ada tabel bookings
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
