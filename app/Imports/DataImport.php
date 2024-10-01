<?php

namespace App\Imports;

use App\BarcodeModel;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BarcodeModel([
            //
            'nomor_inventaris' => $row[1],
            'kategori_barang' => $row[2],
            'kode_kategori' => $row[3],
            'pilihan' => $row[4],
            'jenis_barang' => $row[5],
            'kode_jenis_barang' => $row[6],
            'nama_barang' => $row[7],
            'jumlah' => $row[8],
            'lokasi_lantai' => $row[9],
            'pilihan_02' => $row[10],
            'kode_lantai' => $row[11],
            'lokasi' => $row[12],
            'pilihan_03' => $row[13],
            'kode_lokasi' => $row[14],
            'penanggung_jawab' => $row[15],
            'kondisi' => $row[16],
            'pilihan_04' => $row[17],
            'nomor_urut' => $row[18],
            'pilihan_05' => $row[19],
            'tahun_pembelian' => $row[20],
        ]);
    }
}
