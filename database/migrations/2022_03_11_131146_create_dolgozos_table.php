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
        Schema::dropIfExists('dolgozo');
        Schema::create('dolgozo', function (Blueprint $table) {
            $table->string('szervezetiEgyseg');
            $table->integer('dolgozoId');
            $table->primary('dolgozoId');


            //$table->foreign('dolgozoId')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dolgozo');
    }
};
