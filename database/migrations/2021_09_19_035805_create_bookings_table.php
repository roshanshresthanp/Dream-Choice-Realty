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
            $table->date('expiry_date')->nullable();
            $table->string('appointment_date')->nullable();
          

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->json('document')->nullable();
            $table->string('contact')->nullable();

            $table->string('recent_address')->nullable();
            $table->text('job_description')->nullable();


            $table->string('income')->nullable();
            $table->string('expenses')->nullable();

            $table->boolean('notify')->default('0')->nullable();
            $table->boolean('detail')->default('0')->nullable();

            $table->boolean('approve')->default('0')->nullable();
            $table->boolean('status')->default('0')->nullable();
            $table->integer('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
