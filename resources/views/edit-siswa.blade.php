@extends('master')

@section('judul_halaman', 'Update Data Siswa')

@section('konten')
<a href="/siswa"> Kembali</a>
	
<br/>
<br/>

@foreach($siswa as $p)
<form action="/siswa/update" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
    Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/><br/>
    Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/><br/>
    Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/><br/>
    <input type="submit" value="Simpan Data">
</form>
@endforeach

@endsection