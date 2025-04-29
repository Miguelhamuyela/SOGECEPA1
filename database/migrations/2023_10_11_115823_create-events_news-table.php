<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('eventNews', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('state', 25);
            $table->string('startTime', 255)->nullable();
            $table->longText('body');
            $table->string('endTime')->nullable();
            $table->string('dateEvent');
            $table->string('path');
            $table->string('localization');
            $table->softDeletes();
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
        //

        Schema::dropIfExists("eventNews");

    }
}
