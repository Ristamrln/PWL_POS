<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id'=> 1, 'kategori_id' => '1', 'barang_kode' => '001', 'barang_nama' => 'bakso', 'harga_beli' => '4000', 'harga_jual' => '10000'],
            ['barang_id'=> 2, 'kategori_id' => '2', 'barang_kode' => '002', 'barang_nama' => 'milo', 'harga_beli' => '3000', 'harga_jual' => '5000'],
            ['barang_id'=> 3, 'kategori_id' => '3', 'barang_kode' => '003', 'barang_nama' => 'emina', 'harga_beli' => '15000', 'harga_jual' => '30000'],
            ['barang_id'=> 4, 'kategori_id' => '4', 'barang_kode' => '004', 'barang_nama' => 'kipas', 'harga_beli' => '50000', 'harga_jual' => '70000'],
            ['barang_id'=> 5, 'kategori_id' => '5', 'barang_kode' => '005', 'barang_nama' => 'kursi', 'harga_beli' => '20000', 'harga_jual' => '35000'],
            ['barang_id'=> 6, 'kategori_id' => '1', 'barang_kode' => '006', 'barang_nama' => 'pecel', 'harga_beli' => '5000', 'harga_jual' => '12000'],
            ['barang_id'=> 7, 'kategori_id' => '2', 'barang_kode' => '007', 'barang_nama' => 'jasjus', 'harga_beli' => '3000', 'harga_jual' => '6000'],
            ['barang_id'=> 8, 'kategori_id' => '3', 'barang_kode' => '008', 'barang_nama' => 'wardah', 'harga_beli' => '25000', 'harga_jual' => '40000'],
            ['barang_id'=> 9, 'kategori_id' => '4', 'barang_kode' => '009', 'barang_nama' => 'mouse', 'harga_beli' => '40000', 'harga_jual' => '45000'],
            ['barang_id'=> 10, 'kategori_id' => '5', 'barang_kode' => '010', 'barang_nama' => 'meja', 'harga_beli' => '30000', 'harga_jual' => '50000'],
        ];
        DB::table('m_barang')->insert($data);
    }
}
