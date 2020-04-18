@extends('master')

@section('konten')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Kelas Dan Member
            </div>
            <div class="card-body">
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Member</th>
                            <th>Kelas</th>
                            <th>Jumlah Kelas / Member</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>
                                @foreach($m->kelas as $k)
                                    <li>{{ $k->nama }}</li>
                                @endforeach
                            </td>
                            <td>{{ $m->kelas->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection