<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institusis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institusi');
            $table->string('bidang');
            $table->integer('tahap_pengajian');
            $table->integer('tahun_pengajian');
            $table->string('pelajar_ic', 15);
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
        Schema::drop('institusis');
    }
}
