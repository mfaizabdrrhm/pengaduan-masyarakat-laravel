<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengaduancontroller extends Controller{



    function index(){
        $pengaduan = DB::table('pengaduan')-> get();

        $judul = "selamat datang";

        return view('table',['judul'=>
        $judul,'pengaduan'=> $pengaduan]);
    }
    function tampil_laporan(){
        $judul_laporan = "silahkan melapor";

        return view('isi_laporan',['textlaporan' =>  $judul_laporan]);
    }
    function proses_tambah_pengaduan(Request $request){

        $nama_foto = $request->foto->getClintOriginalName();
        $request->validate([
            'isi_laporan' => 'requiredmin:2'
        ]);
        $request->foto->storeAs('public/image',$nama_foto);
        $isi_laporan = $request->isi_laporan;
        DB::table('pengaduan')->insert([
            'id_pengaduan' =>'',
            'tgl_pengaduan' =>date('Y-m-d'),
            'nik' =>'',
            'isi_laporan' => $isi_laporan,
            'foto' => $request->foto->getClintOriginalName(),
            'status' => '',
        ]);
        return redirect('/table');
    }
    function home(){
        $judul = "selamat datang di home";

        return view('home',['textjudul' => $judul]);
    }
    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan','=',$id)->delete ();
        return redirect()->back();
    }
    function detail($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=',$id)->get();

        return view('detail',['pengaduan'=> $pengaduan]);
    }
        
    }
