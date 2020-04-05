@extends('master')

@section('judul_halaman', 'Tambah Siswa')

@section('konten')
<a href="/siswa"> Kembali</a>

<br/>
<br/>

<form action="/siswa/store" method="POST">
    {{ csrf_field() }}
    Nama :  <input type="text" name="nama" required="required"> <br/><br/>
    Umur : <input type="number" name="umur" required="required"> <br/><br/>
    Alamat : <textarea name="alamat" required="required"></textarea> <br/><br/>
    <input type="submit" value="Simpan Data">
</form>

@endsection