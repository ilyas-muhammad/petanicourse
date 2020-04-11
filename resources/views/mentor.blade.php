@extends('master')

@section('judul_halaman', 'Data Mentor')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Mentor
            </div>
            <div class="card-body">
                <a href="/mentor/tambah" class="btn btn-primary">Input Mentor Baru</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mentor as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->umur }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>
                                <a href="/mentor/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                <a href="/mentor/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection