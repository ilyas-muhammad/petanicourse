@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-lg-8 mx-auto my-5">	

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
            @endif

            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea class="form-control" name="keterangan"></textarea>
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
            
            <h4 class="my-5">Galery</h4>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1%">File</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gambar as $g)
                    <tr>
                        <td><img width="150px" src="{{ url('/images/'.$g->file) }}"></td>
                        <td>{{$g->keterangan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
