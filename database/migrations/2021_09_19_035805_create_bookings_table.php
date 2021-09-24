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
            $table->id();
            $table->date('issued_date')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            // $table->string('salary')->nullable();
            $table->string('contact')->nullable();

            // $table->string('address')->nullable();
            // $table->string('previous_address')->nullable();
            $table->string('appointment_date')->nullable();

            $table->string('agreement')->nullable();
            // $table->string('occupation')->nullable();
            $table->boolean('approve')->default('0')->nullable();
            $table->boolean('status')->default('0')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->timestamps();
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
