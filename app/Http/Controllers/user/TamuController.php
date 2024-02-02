<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpanTamu(Request $request){
        $nama = $request->nama;
        $tlp = $request->tlp;
        $email = $request->email;
        $alamat = $request->alamat;
        $keperluan = $request->keperluan;


        
        $data = new BukuTamu();
        $data->nama = $nama;
        $data->tlp = $tlp;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->keperluan = $keperluan;
        $data->password = hash::make('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data Berhasil Disimpan');


    }

    
}
