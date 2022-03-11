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
        Schema::dropIfExists('jelentkezes');
        Schema::create('jelentkezes', function (Blueprint $table) {
            $table->increments('jelentkezesId');
            $table->integer('esemenyId')->unsigned();
            $table->integer('userId')->unsigned();
            $table->tinyInteger('megjelent')->default('0');

            //$table->foreign('esemenyId')->references('id')->on('esemeny')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('userId')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jelentkezes');
    }
};
