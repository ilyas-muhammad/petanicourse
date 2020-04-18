@extends('master')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Penulis dan Artikel
            </div>
            <div class="card-body">
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Penulis</th>
                            <th>Judul Artikel</th>
                            <th>Jumlah Artikel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penulis as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>
                                @foreach($p->blog as $b)
                                <li>{{ $b->judul }}</li>
                                @endforeach
                            </td>
                            <td>{{ $p->blog->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection