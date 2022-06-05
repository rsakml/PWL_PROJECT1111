@extends('admin.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Product
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
                <form method="post" action="{{ route('product.update', $Product->id_product) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="id_product">ID Product</label>
                        <input type="text" name="id_product" class="form-control" id="id_product" value="{{ $Product->id_product }}" ariadescribedby="id_product" >
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="foto"
                            value="{{ $Product->foto }}"></br>
                        <img width="150px" src="{{ asset('storage/' . $Product->foto) }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_product">Nama Product</label>
                        <input type="text" name="nama_product" class="form-control" id="nama_product" value="{{ $Product->nama_product }}" ariadescribedby="nama_product" >
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="merk" name="merk" class="form-control" id="merk" value="{{ $Product->merk }}" ariadescribedby="merk" >
                    </div>
                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>              
                        <input type="harga_beli" name="harga_beli" class="form-control" id="harga_beli" value="{{ $Product->harga_beli }}" ariadescribedby="harga_beli" >
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>              
                        <input type="harga_jual" name="harga_jual" class="form-control" id="harga_jual" value="{{ $Product->harga_jual }}" ariadescribedby="harga_jual" >
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>              
                        <input type="stok" name="stok" class="form-control" id="stok" value="{{ $Product->stok }}" ariadescribedby="stok" >
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
   </div>
@endsection