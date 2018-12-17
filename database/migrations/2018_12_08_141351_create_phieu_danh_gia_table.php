<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuDanhGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_danh_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_svlop')->unsigned();
            $table->foreign('id_svlop')->references('id')->on('sv_lop');
            $table->string('ten');
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
        Schema::dropIfExists('phieu_danh_gia');
    }
}
