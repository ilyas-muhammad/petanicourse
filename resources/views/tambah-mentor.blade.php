@extends('master')

@section('judul_halaman', 'Input Data Mentor')

@section('konten')    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Tambah Data Mentor
            </div>
            <div class="card-body">
                <a href="/mentor" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                
                <form method="post" action="/mentor/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Mentor ..">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" class="form-control" placeholder="Umur Mentor ..">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('umur')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Mentor .."></textarea>

                            @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection