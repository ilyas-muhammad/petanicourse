<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('judul_halaman', 'Data Siswa')
{{-- cara kedua --}}
@section('konten')
    <a href="/siswa/tambah"> + Tambah Siswa Baru</a>
        
    <br/>
    <br/>

    <div class="form-group">
        <p>Cari Data Siswa :</p>
            <form action="/siswa/cari" method="GET" class="form-inline">
                <input class="form-control" type="text" name="nama_siswa" placeholder="Cari Siswa .." value="{{ old('cari_nama') }}">
                <input class="form-control" type="text" name="alamat" placeholder="Cari Alamat Siswa.." value="{{ old('alamat') }}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI">
            </form>
        <br/>
    </div>

    <table border="1" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        @foreach($siswa as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->umur }}</td>
            <td>{{ $data->alamat }}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="/siswa/edit/{{ $data->id }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/siswa/hapus/{{ $data->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
        Halaman : {{ $siswa->currentPage() }} <br/>
        Jumlah Data : {{ $siswa->total() }} <br/>
        Data Per Halaman : {{ $siswa->perPage() }} <br/>
    
    
        {{ $siswa->links() }}
 
@endsection