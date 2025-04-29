<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsideGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inside_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('cover');
            $table->unsignedBigInteger('fk_idGallery');
            $table->foreign('fk_idGallery')->references('id')->on('gallery')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('inside_galleries');
    }
}
