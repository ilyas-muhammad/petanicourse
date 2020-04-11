@extends('master')

@section('judul_halaman', 'Tambah Siswa')

@section('konten')
<a href="/siswa"> Kembali</a>

<br/>
<br/>

{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/siswa/store" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">*Nama</label>
        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <label for="umur">*Umur</label>
        <input class="form-control" type="number" name="umur" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <label for="alamat">*Alamat</label>
        <textarea class="form-control" name="alamat">{{ old('nama') }}</textarea> 
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>

@endsection