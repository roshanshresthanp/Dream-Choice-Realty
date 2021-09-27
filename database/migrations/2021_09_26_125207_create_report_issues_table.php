<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_issues', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('subject')->nullable();
            $table->mediumText('description')->nullable();
            $table->json('photo')->nullable();
            $table->boolean('approve')->default('0')->nullable();
            $table->boolean('status')->default('0')->nullable();
            $table->boolean('complete')->default('0')->nullable();    

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
        Schema::dropIfExists('report_issues');
    }
}
