@extends('master')

@section('judul_halaman', 'Input Data Mentor')

@section('konten') 
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Edit Data Mentor
            </div>
            <div class="card-body">
                <a href="/mentor" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                

                <form method="post" action="/mentor/update/{{ $mentor->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama mentor .." value=" {{ $mentor->nama }}">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Umur</label>
                        <input type="text" name="umur" class="form-control" placeholder="Umur mentor .." value=" {{ $mentor->umur }}">

                        @if($errors->has('umur'))
                            <div class="text-danger">
                                {{ $errors->first('umur')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat mentor .."> {{ $mentor->alamat }} </textarea>

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