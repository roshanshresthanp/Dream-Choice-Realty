<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->string('featured_photo')->nullable();
            $table->string('photo')->nullable();
            $table->double('rent')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('garage')->nullable();
            $table->string('area')->nullable();
            $table->string('location')->nullable();
            $table->mediumText('facility')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
