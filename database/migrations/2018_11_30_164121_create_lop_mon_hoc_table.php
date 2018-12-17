<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLopMonHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop_mon_hoc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_canbo')->unsigned();
            $table->foreign('id_canbo')->references('id')->on('can_bo');
            $table->string('ma_lop');
            $table->string('mon_hoc');
            $table->string('thoi_gian');
            $table->string('giang_duong');
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
        Schema::dropIfExists('lop_mon_hoc');
    }
}
