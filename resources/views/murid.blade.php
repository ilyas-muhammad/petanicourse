@extends('master')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Murid
            </div>
            <div class="card-body">
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Murid</th>
                            <th>Wali Murid</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($murid as $m)
                        <tr>
                            <td>{{ $m->id }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->waliMurid->nama }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection