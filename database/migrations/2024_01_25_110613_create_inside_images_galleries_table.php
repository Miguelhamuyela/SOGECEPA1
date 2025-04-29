<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsideImagesGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inside_images_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->longtext('description');
            $table->unsignedBigInteger('fk_idInsideGallery');
            $table->foreign('fk_idInsideGallery')->references('id')->on('inside_galleries')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inside_images_galleries');
    }
}
