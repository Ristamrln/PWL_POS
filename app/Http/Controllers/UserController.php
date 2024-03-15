<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {   
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
            
        // ];
        // UserModel::create($data);
        
        //coba akses model UserModel
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password'=> Hash::make('12345'),
                'level_id' => 2
            
            ],
        ); 
        $user->save();
        //ambil semua data dari m_user
        // dd($user);
        return view('user', ['data' => $user]);
}
}