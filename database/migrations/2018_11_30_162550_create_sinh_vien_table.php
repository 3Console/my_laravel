<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('msv');
            $table->string('mat_khau');
            $table->string('ho_ten');
            $table->string('vnu_email');
            $table->string('khoa_hoc');
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
        Schema::dropIfExists('sinh_vien');
    }
}
