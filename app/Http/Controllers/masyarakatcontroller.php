<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class masyarakatcontroller extends Controller
{
    function tablemas(){
        $masyarakat = DB::table('masyarakat')-> get();
        return view('table_masyarakat',['masyarakat'=> $masyarakat]);
    }
    function proses_tambah_masyarakat(Request $request){
        
        $request->validate([
            'isi_laporan' => 'required min:2'
        ]);
    function buatakun(){
        return view('registrasi');
    }
        function proses_registrasi(Request $request){
            $nik = $request->nik;
            $nama = $request->nama;
            $username = $request->username;
            $password = $request->password;
            $telp = $request->telp;

            DB::table('masyarakat')->insert([
                'nik' => $nik,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'telp' => $telp,
            ]);
        
        }
    }
}
