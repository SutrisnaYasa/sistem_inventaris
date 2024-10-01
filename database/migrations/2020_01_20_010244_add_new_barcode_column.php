<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewBarcodeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barcode_models', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nomor_inventaris');
            $table->string('kategori_barang');
            $table->string('kode_kategori');
            $table->string('pilihan');
            $table->string('jenis_barang');
            $table->string('kode_jenis_barang');
            $table->string('nama_barang');
            $table->string('jumlah');
            $table->string('lokasi_lantai');
            $table->string('pilihan_02');
            $table->string('kode_lantai');
            $table->string('lokasi');
            $table->string('pilihan_03');
            $table->string('kode_lokasi');
            $table->string('penanggung_jawab');
            $table->string('kondisi');
            $table->string('pilihan_04');
            $table->string('nomor_urut');
            $table->string('pilihan_05');
            $table->string('tahun_pembelian');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('barcode_models', function (Blueprint $table) {
            $table->dropColumn('kode_barang');
            $table->dropColumn('detail');
        });

        //
    }
}
