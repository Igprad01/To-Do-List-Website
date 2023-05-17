@extends('home')

@section('history')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="/"><button class="btn btn-secondary fs-5 me-5"><i data-feather="log-out"></i></button></a>
                <h3 class="mt-1 me-2">History</h3>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul List</th>
                        <th>deskripsi</th>
                        <th>batas tanggal</th>
                        <th>Batas Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $var)
                        <tr>
                            <td>{{$var->id}}</td>
                            <td>{{$var->name }}</td>
                            <td>{{$var->deskripsi}}</td>
                            <td>{{ date('Y-m-d', strtotime($var->batas_tgl)) }}</td>
                            <td>{{ date('H:i: A', strtotime($var->batas_waktu)) }}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="{{ $riwayat->previousPageUrl() }}" aria-label="Previous">
                      Previous
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="{{ $riwayat->nextPageUrl() }}" aria-label="Next">
                      Next
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>
</div>
</div>  
@endsection