<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetugasController extends Controller
{

        function table(){
            $petugas = DB::table('petugas')-> get();
          return view('table',['petugas'=> $petugas]);
        }
    
        function proses_tambah_petugas(Request $request){
    
            $request->validate([
                'isi_laporan' => 'required|min:2'
            ]);
        function buatakun(){
           return view('register_petugas'); 
        }
           function proses_registrasi_petugas(Request $request){
            $id_petugas = $request->id_petugas;
            $nama_petugas = $request->nama_petugas;
            $username = $request->username;
            $password = $request->password;
            $telp = $request->telp;
            $level = $request->level;
    
            DB::table('petugas')->insert([
                'id_petugas' => $id_petugas,
                'nama_petugas' => $nama_petugas,
                'username' => $username,
                'password' => $password,
                'telp' => $telp,
                'level' => $level, 
            ]);
            return redirect('/table ');
        }
    
    }

    function update(){
        return view('isi_laporan');

    }
    
     }