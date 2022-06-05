@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Employee </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $employee->id }}</li>
                        <li class="list-group-item"><b>Gambar: </b><img width="100px" src="{{ asset('img/' . $employee->gambar) }}"></li>
                        <li class="list-group-item"><b>Nama: </b>{{ $employee->nama }}</li>
                        <li class="list-group-item"><b>Jenis Kelamin: </b>{{ $employee->jenisKelamin }}</li>
                        <li class="list-group-item"><b>jabatan: </b>{{ $employee->jabatan }}</li>
                        <li class="list-group-item"><b>No.HP: </b>{{ $employee->nohp }}</li>
                    </ul>
                </div> <a class="btn btn-success mt-3" href="{{ route('employee.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection