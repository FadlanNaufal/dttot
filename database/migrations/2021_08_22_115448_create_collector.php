<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pesanan')->nullable();
            $table->string('rating')->nullable();
            $table->string('tenor_pinjaman');
            $table->string('atribut_nasabah');
            $table->string('jumlah_pinjaman');
            $table->string('nama_peminjam');
            $table->string('kota');
            $table->string('status_pengembalian');
            $table->string('waktu_keluar_sistem');
            $table->string('waktu_masuk_sistem');
            $table->string('penagih');
            $table->string('jumlah_hari_lambat');
            $table->string('nominal_keluar_sistem');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collector');
    }
}
