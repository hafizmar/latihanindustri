<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelajar_ic', 15);
            $table->string('pelajar_nama');
            $table->string('pelajar_email');
            $table->string('password', 60);
            $table->string('activation_hash');
            $table->string('pelajar_no_tel');
            $table->string('pelajar_nama_ipt');
            $table->text('pelajar_catatan');
            $table->string('pelajar_bidang');
            $table->integer('pelajar_tahap_pengajian');
            $table->integer('pelajar_tahun_pengajian');
            $table->text('pelajar_alamat_pengajian');
            $table->date('pelajar_tarikh_diperlukan');
            $table->date('pelajar_tarikh_tamat');
            $table->timestamps();
            $table->string('usertype_id');
            $table->integer('status_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pelajars');
    }
}
