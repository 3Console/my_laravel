<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvLopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sv_lop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sinhvien')->references('id')->on('sinh_vien');
            $table->integer('id_lop')->references('id')->on('lop_mon_hoc');
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
        Schema::dropIfExists('sv_lop');
    }
}
