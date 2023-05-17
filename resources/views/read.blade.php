@extends('home')

@section('content-read')
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="mt-1">Daftar Todolist</h3>
                    <a href="/history"><button class="btn btn-outline-secondary fs-5 me-4 fw-bold"><i data-feather="folder"></i> History</button></a>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <a href="/create"><button class="btn btn-primary rounded-3" ><i data-feather="file-plus"></i> tambah List</button></a>
                        <tr>
                            <th>No</th>
                            <th>Judul List</th>
                            <th>deskripsi</th>
                            <th>batas tanggal</th>
                            <th>Batas Waktu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($show as $var)
                            <tr>
                                <td>{{$var->id}}</td>
                                <td>{{$var->name }}</td>
                                <td>{{$var->deskripsi}}</td>
                                <td>{{ date('Y-m-d', strtotime($var->batas_tgl)) }}</td>
                                <td>{{ date('H:i: A', strtotime($var->batas_waktu)) }}</td>
                                <td>
                                    <a href="{{ route('tasks.exit', $var->id) }}"><button class="btn btn-success"><i data-feather="check-square"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  
@endsection