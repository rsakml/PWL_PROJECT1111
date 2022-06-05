@extends('admin.layout') @section('content') <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Edit Data Karyawan </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                        input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif <form method="post" action="{{ route('supplier.update', $supplier->id) }}" id="myForm">
                        @csrf @method('PUT')
                        <div class="form-group"> <label for="id">Id</label> <input type="text" name="id"
                                class="form-control" id="id" value="{{ $supplier->id }}" aria-describedby="id">
                        </div>
                        <div class="form-group"> <label for="Gambar">gambar</label> <input type="file" name="gambar"
                                class="form-control" id="gambar" value="{{ $supplier->gambar }}"
                                aria-describedby="gambar"> </div>
                        <div class="form-group"> <label for="nama">Nama</label> <input type="nama" name="nama"
                                class="form-control" id="nama" value="{{ $supplier->nama }}"
                                aria-describedby="nama"> </div>
                        <div class="form-group"> <label for="kategori">Kategori</label> <input
                                type="kategori" name="kategori" class="form-control" id="kategori"
                                value="{{ $supplier->kategori }}" aria-describedby="kategori"> </div>
                        <div class="form-group"> <label for="email">Email</label> <input type="email" name="email"
                                class="form-control" id="email" value="{{ $supplier->email }}"
                                aria-describedby="email"> </div> <button type="submit"
                            class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div> @endsection
