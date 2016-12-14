<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('industri_nama_pegawai');
            $table->string('industri_email')->unique();
            $table->string('industri_no_tel');
            $table->string('industri_password', 60);
            $table->string('activation_hash');
            $table->string('industri_term_cond');
            $table->string('usertype_id');
            $table->integer('industri_listdown');
            $table->integer('status_acc');
            $table->integer('new_register');
            $table->rememberToken();
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
        Schema::drop('industris');
    }
}
