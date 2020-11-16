<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPendaftaranSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pendaftaran_siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tingkat_pendidikan_id')->unsigned();
            $table->bigInteger('nama_sekolah_id')->unsigned();
            $table->bigInteger('tahun_ajaran_id')->unsigned();
            $table->string('nama_calon_siswa');
            $table->date('tanggal_lahir');
            $table->bigInteger('jenis_kelamin_id')->unsigned();
            $table->text('alamat_calon_siswa');
            $table->string('img_siswa');
            $table->char('nomor_telepon',12);
            $table->char('nomor_telepon_orangtua',12);
            $table->bigInteger('sumber_informasi_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('tingkat_pendidikan_id')->references('id')->on('tingkat_pendidikans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nama_sekolah_id')->references('id')->on('nama_sekolahs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sumber_informasi_id')->references('id')->on('sumber_informasis')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**w
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_pendaftaran_siswas');
    }
}
