<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->unsignedBigInteger('kasir_id');
            $table->integer('point');
            $table->integer('deposit');
            $table->timestamps();
          
            $table->foreign('kasir_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
