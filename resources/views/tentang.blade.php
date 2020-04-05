<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('title', 'TENTANG')

{{-- cara pertama --}}
@section('judul_halaman', 'Tentang PetaniWeb')
 
{{-- cara kedua --}}
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
        PetaniWeb is a company driven by creative-freelancers and hardworking, 
        we have a strong commitment to a solid team work.
        At first we only service provider of multimedia design, 
        but this time, we have extended making web services and translation and interpreting services
	</p>
 
@endsection