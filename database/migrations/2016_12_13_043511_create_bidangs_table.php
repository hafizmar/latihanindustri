<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bidang_name');
            $table->integer('bidang_kekosongan');
            $table->integer('bidang_elaun');
            $table->date('bidang_tarikh_diperlukan');
            $table->date('bidang_tarikh_tamat');
            $table->integer('bidang_listdown');
            $table->text('bidang_description', 1500);
            $table->timestamps();
            $table->string('industri_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bidangs');
    }
}
