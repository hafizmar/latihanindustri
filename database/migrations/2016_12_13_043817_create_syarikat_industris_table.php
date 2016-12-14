<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyarikatIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarikat_industris', function (Blueprint $table) {
            $table->string('syarikat_industri_id');
            $table->string('syarikat_no_pendaftaran');
            $table->string('industri_email');
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
        Schema::drop('syarikat_industris');
    }
}
