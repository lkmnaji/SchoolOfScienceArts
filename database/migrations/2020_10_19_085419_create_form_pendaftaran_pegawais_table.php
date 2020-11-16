<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPendaftaranPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pendaftaran_pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('posisi_lamaran_id')->unsigned();
            $table->string('nama_calon_pegawai');
            $table->date('tanggal_lahir');
            $table->bigInteger('jenis_kelamin_id')->unsigned();
            $table->string('img_pegawai');
            $table->string('cv_pegawai');
            $table->char('nomor_telepon_pegawai',12);
            $table->string('email_calon_pegawai');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('posisi_lamaran_id')->references('id')->on('posisis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_pendaftaran_pegawais');
    }
}
