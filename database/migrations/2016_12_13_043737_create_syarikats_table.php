<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyarikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarikats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('syarikat_nama');
            $table->string('syarikat_no_pendaftaran');
            $table->string('syarikat_catatan');
            $table->string('syarikat_no_tel');
            $table->string('syarikat_email')->unique();
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
        Schema::drop('syarikats');
    }
}
