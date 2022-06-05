@extends('admin.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Tambah Product
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="{{ route('product.store') }}" id="myForm">
                    @csrf
                        <div class="form-group">
                            <label for="id_product">ID Product</label>
                            <input type="text" name="id_product" class="form-control" id="id_product" aria-describedby="id_product" >
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" required="required" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="nama_product">Nama Product</label>
                            <input type="nama_product" name="nama_product" class="form-control" id="nama_product" aria-describedby="nama_product" >
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="merk" name="merk" class="form-control" id="merk" aria-describedby="merk" >
                        </div>
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="harga_beli" name="harga_beli" class="form-control" id="harga_beli" aria-describedby="harga_beli" >
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="harga_jual" name="harga_jual" class="form-control" id="harga_jual" aria-describedby="harga_jual" >
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="stok" name="stok" class="form-control" id="stok" aria-describedby="stok" >
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection