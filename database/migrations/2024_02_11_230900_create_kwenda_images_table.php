<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwendaImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwenda_images', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->unsignedBigInteger('fk_idKwenda');
            $table->foreign('fk_idKwenda')->references('id')->on('kwendas')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('kwenda_images');
    }
}
