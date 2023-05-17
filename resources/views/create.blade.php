@extends('home')

@section('create')
<div class="row justify-content-center">
<div class="col-md-3 mt-5 pt-5">
    <div class="card pt-5 ps-4 pb-5 pe-4 rounded">
        <h3 class="text-center font-monospace">Tambah List</h3>
        <form action="/create-data" method="get">
            {{ csrf_field() }}
            <label for="desc">Judul List</label>
            <div class="input-field">
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <label for="desc">Deskripsi</label>
            <div class="input-field">
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" required>
            </div>
            <label for="desc">Batas Tanggal</label>
            <div class="input-field">
                <input type="date" class="form-control" name="batas_tgl" id="batas_tgl" required>
            </div>
            <label for="desc">Batas Waktu</label>
            <div class="input-field">
                <input type="time" class="form-control mb-4" name="batas_waktu" id="batas_waktu" required>
            </div>
            <button class="btn btn-primary"><i data-feather="file-plus"></i> tambah list</button>
        </form>
    </div>
</div>
</div>
@endsection
    