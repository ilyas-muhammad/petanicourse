<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // PAY ATTENTION AT THIS

class SiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table siswa
        // $data = DB::table('siswa')->get();
        $data = DB::table('siswa')->paginate(5);
 
    	// mengirim data siswa ke view siswa
    	return view('siswa', ['siswa' => $data]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambah-siswa');
    }

    public function store(Request $request)
    {
        // insert data ke table siswa
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

    public function edit($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('siswa')->where('id',$id)->get();
        // passing data siswa yang didapat ke view edit.blade.php
        return view('edit-siswa',['siswa' => $siswa]);
    }

    public function update(Request $request)
    {
        // update data siswa
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

    public function hapus($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        DB::table('siswa')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $nama = $request->cari_nama;
        $alamat = $request->alamat;
 
        // mengambil data dari table siswa sesuai pencarian data
        $siswa = DB::table('siswa')
        ->where('nama','like',"%".$nama."%")
        ->where('alamat','like',"%".$alamat."%")
        ->paginate();

        // mengirim data siswa ke view siswa
        return view('siswa',['siswa' => $siswa]);
    }
}
