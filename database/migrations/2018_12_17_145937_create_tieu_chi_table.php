<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTieuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tieu_chi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_phantieuchi')->unsigned();
            $table->foreign('id_phantieuchi')->references('id')->on('phantieuchi');
            $table->string('tentieuchi');
            $table->string('active')->default(0);
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
        Schema::dropIfExists('tieu_chi');
    }
}
