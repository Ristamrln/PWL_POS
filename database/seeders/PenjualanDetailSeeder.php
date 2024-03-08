<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanggal = Carbon::now();
        $data = [
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000,'jumlah' =>10],
            ['penjualan_id' => 2, 'barang_id' => 2, 'harga' => 5000,'jumlah' =>20],
            ['penjualan_id' => 3, 'barang_id' => 3, 'harga' => 30000,'jumlah' =>30],
            ['penjualan_id' => 4, 'barang_id' => 4, 'harga' => 70000,'jumlah' =>40],
            ['penjualan_id' => 5, 'barang_id' => 5, 'harga' => 35000,'jumlah' =>50],
            ['penjualan_id' => 6, 'barang_id' => 6, 'harga' => 12000,'jumlah' =>60],
            ['penjualan_id' => 7, 'barang_id' => 7, 'harga' => 6000,'jumlah' =>70],
            ['penjualan_id' => 8, 'barang_id' => 8, 'harga' => 40000,'jumlah' =>80],
            ['penjualan_id' => 9, 'barang_id' => 9, 'harga' => 45000,'jumlah' =>90],
            ['penjualan_id' => 10, 'barang_id' => 10, 'harga' => 50000,'jumlah' =>100],
            ['penjualan_id' => 10, 'barang_id' => 10, 'harga' => 50000,'jumlah' =>10],
            ['penjualan_id' => 9, 'barang_id' => 9, 'harga' => 45000,'jumlah' =>20],
            ['penjualan_id' => 8, 'barang_id' => 8, 'harga' => 40000,'jumlah' =>30],
            ['penjualan_id' => 7, 'barang_id' => 7, 'harga' => 6000,'jumlah' =>40],
            ['penjualan_id' => 6, 'barang_id' => 6, 'harga' => 12000,'jumlah' =>50],
            ['penjualan_id' => 5, 'barang_id' => 5, 'harga' => 35000,'jumlah' =>60],
            ['penjualan_id' => 4, 'barang_id' => 4, 'harga' => 70000,'jumlah' =>70],
            ['penjualan_id' => 3, 'barang_id' => 3, 'harga' => 30000,'jumlah' =>80],
            ['penjualan_id' => 2, 'barang_id' => 2, 'harga' => 5000,'jumlah' =>90],
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000,'jumlah' =>100],
            ['penjualan_id' => 1, 'barang_id' => 10, 'harga' => 50000,'jumlah' =>10],
            ['penjualan_id' => 2, 'barang_id' => 9, 'harga' => 45000,'jumlah' =>20],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 40000,'jumlah' =>30],
            ['penjualan_id' => 4, 'barang_id' => 7, 'harga' => 6000,'jumlah' =>40],
            ['penjualan_id' => 5, 'barang_id' => 6, 'harga' => 12000,'jumlah' =>50],
            ['penjualan_id' => 6, 'barang_id' => 5, 'harga' => 35000,'jumlah' =>60],
            ['penjualan_id' => 7, 'barang_id' => 4, 'harga' => 70000,'jumlah' =>70],
            ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 30000,'jumlah' =>80],
            ['penjualan_id' => 9, 'barang_id' => 2, 'harga' => 5000,'jumlah' =>90],
            ['penjualan_id' => 10, 'barang_id' => 1, 'harga' => 10000,'jumlah' =>100],

        ];
        DB::table('t_penjualan_detail')->insert($data);  
    }
}
