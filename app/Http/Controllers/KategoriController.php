<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        /* $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil'; */

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row.' baris';  

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: '. $row.' baris'; 

        // $data = DB::select('select * from m_kategori');
        // return view('kategori', ['data' => $data]);
        return $dataTable->render('Kategori.index');
    }
    public function create()
    {
        return view('kategori.create');
    }

         public function store(Request $request)
         {
             KategoriModel::create([
                 'kategori_kode' => $request->kodeKategori,
                 'kategori_nama' => $request->namaKategori,

             ]);
             return redirect('/kategori');
        }

        public function edit($id)
        {
            $data = KategoriModel::find($id);
            return view('kategori.edit', ['data' => $data]);
            
        }

        public function update($id, Request $request)
        {
            $kategori=KategoriModel::find($id);

            $kategori->kategori_kode = $request->kategori_kode;
            $kategori->kategori_nama = $request->kategori_nama;

            $kategori->save();
            return redirect('/kategori');
        }

        
        public function delete($id)
        {
            $data = KategoriModel::find($id);
            $data->delete();
            return redirect('/kategori');

        }
}
