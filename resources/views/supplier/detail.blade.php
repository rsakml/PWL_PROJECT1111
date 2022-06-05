@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Supplier </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $supplier->id }}</li>
                        <li class="list-group-item"><b>Gambar: </b><img width="100px" src="{{ asset('img/' . $supplier->gambar) }}"></li>
                        <li class="list-group-item"><b>Nama: </b>{{ $supplier->nama }}</li>
                        <li class="list-group-item"><b>Kategori: </b>{{ $supplier->kategori }}</li>
                        <li class="list-group-item"><b>Email: </b>{{ $supplier->email }}</li>
                    </ul>
                </div> <a class="btn btn-success mt-3" href="{{ route('supplier.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection