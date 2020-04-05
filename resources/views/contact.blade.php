<!-- Menghubungkan dengan view template master -->
@extends('master')
 
{{-- cara pertama --}}
@section('judul_halaman', 'Halaman Kontak')

@section('konten')
    Nama : {{ $nama }}<br />
    Alamat : {{ $alamat }}<br />
    No Telepon : {{ $phone }}<br />
@endsection
