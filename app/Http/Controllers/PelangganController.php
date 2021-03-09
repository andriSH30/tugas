<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        return view('tugas.tugas');
    }

    public function store(Request $request){
         // Pindahkan File Foto KTP Ke Direktori
         $direktori = 'assets/img/upload';
         $ktp = $request->file('ktp');
         $nama_ktp = time().$ktp->getClientOriginalName();
         $ktp->name = $nama_ktp;
         $ktp->move($direktori, $ktp->name);

         // Pindahkan File Foto Selfie Ke Direktori
         $direktori = 'assets/img/upload';
         $selfie = $request->file('selfie');
         $nama_selfie = time().$selfie->getClientOriginalName();
         $selfie->name = $nama_selfie;
         $selfie->move($direktori, $selfie->name);

         // Proses Store Data Pelanggan ke Database
         Pelanggan::Create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->gender,
            'foto_ktp' => $direktori."/".$nama_ktp,
            'foto_selfie' => $direktori."/".$nama_selfie,
        ]);

        return response([
            'message' => 'Berhasil Menambahkan Pelanggan'
        ]);

    }

    public function show($id){
        $data = Pelanggan::find($id);

        return response([
            'data' => $data
        ]);
    }

    public function load_pelanggan(){
        // Ambil semua data di model pelanggan
        $data = Pelanggan::latest()->get();
        $total = count($data);

        return response([
            'message' => 'get list pelanggan',
            'data' => $data,
            'jumlah' => $total
        ]);
    }
}
