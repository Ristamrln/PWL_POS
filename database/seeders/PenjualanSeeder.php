<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanggal = Carbon::now();
        $data = [
            ['user_id' => 3, 'pembeli' => 'sovy', 'penjualan_kode' => '1','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'chia', 'penjualan_kode' => '2','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'aiime', 'penjualan_kode' => '3','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'feni', 'penjualan_kode' => '4','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'eby', 'penjualan_kode' => '5','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'racel', 'penjualan_kode' => '6','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'ribka', 'penjualan_kode' => '7','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'geci', 'penjualan_kode' => '8','penjualan_tanggal' =>$tanggal],
            ['user_id' => 3, 'pembeli' => 'lila', 'penjualan_kode' => '9','penjualan_tanggal' =>$tanggal],
            ['user_id'=> 3, 'pembeli' => 'azka', 'penjualan_kode' => '10','penjualan_tanggal' =>$tanggal],
           
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
 