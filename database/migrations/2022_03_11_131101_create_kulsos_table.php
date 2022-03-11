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
        Schema::dropIfExists('kulsos');
        Schema::create('kulsos', function (Blueprint $table) {
            $table->string('telepules');
            $table->integer('kulsosId')->unsigned();
            $table->primary('kulsosId');


            //$table->foreign('kulsosId')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kulsos');
    }
};
