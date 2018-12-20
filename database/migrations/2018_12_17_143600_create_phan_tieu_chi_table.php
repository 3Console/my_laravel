<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanTieuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_tieu_chi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_phieu')->unsigned();
            $table->foreign('id_phieu')->references('id')->on('phieu_danh_gia');
            $table->string('loaitieuchi');
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
        Schema::dropIfExists('phan_tieu_chi');
    }
}
