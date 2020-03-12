<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembinaAsramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembinaAsrama', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pembinaAsrama_id')->unsigned();
            $table->foreign('pembinaAsrama_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('NIP')->nullable();
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
        Schema::dropIfExists('pembinaAsrama');
    }
}
