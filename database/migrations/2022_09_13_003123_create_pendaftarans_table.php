<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {

            // Informasi Diri Mahasiswa
            $table->id();
            $table->integer('mahasiswa_id');
            $table->integer('p1_id')->nullable();
            $table->integer('p2_id')->nullable();
            $table->integer('r1_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('peminatan')->nullable();
            $table->integer('angkatan')->nullable();
            $table->timestamps();

            // Informasi Nilai Mahasiswa
            $table->float('ipk')->nullable();
            $table->integer('jumlah_sks')->nullable();
            $table->integer('jumlah_teori_d')->nullable();
            $table->integer('jumlah_prak_d')->nullable();
            $table->integer('jumlah_e')->nullable();
            $table->string('algo')->nullable();
            $table->string('strukdat')->nullable();
            $table->string('basdat')->nullable();
            $table->string('rpl')->nullable();
            $table->string('metpen')->nullable();
            $table->string('pemweb')->nullable();
            $table->string('prak_pemweb')->nullable();
            $table->string('po1')->nullable();
            $table->string('prak_po1')->nullable();
            $table->string('appl')->nullable();
            $table->string('tagihan_uang')->nullable();
            $table->string('lunas_pembayaran')->nullable();
            $table->string('khs')->nullable();
            $table->string('berkas_ta1')->nullable();
            $table->string('judul_ta1')->nullable();

            // Ajuan Dosen
            $table->string('p1')->nullable();
            $table->boolean('s_p1')->nullable();
            $table->string('p2')->nullable();
            $table->boolean('s_p2')->nullable();
            $table->string('u1')->nullable();
            $table->boolean('s_u1')->nullable();
            $table->string('u2')->nullable();
            $table->boolean('s_u2')->nullable();

            // Status Pendaftaran
            $table->string('status')->nullable();
            $table->string('keterangan_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};