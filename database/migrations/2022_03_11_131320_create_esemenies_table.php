<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('esemeny');

        Schema::create('esemeny', function (Blueprint $table) {
            $table->increments('id');
            $table->string('megnevezes');
            $table->integer('kapacitas')->unsigned();
            $table->longText('leiras');
            $table->dateTime('kezdet');
            $table->dateTime('veg');
            $table->string('helyszin');
            $table->integer('dolgozoId')->unsigned();

            //$table->foreign('dolgozoId')->references('dolgozoId')->on('dolgozo')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esemeny');
    }
};
