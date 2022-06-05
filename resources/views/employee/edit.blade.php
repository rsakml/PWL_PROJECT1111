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
                        @endif <form method="post" action="{{ route('employee.update', $employee->id) }}" id="myForm">
                            @csrf @method('PUT')
                            <div class="form-group"> <label for="id">Id</label> <input type="text" name="id"
                                    class="form-control" id="id" value="{{ $employee->id }}" aria-describedby="id">
                            </div>
                            <div class="form-group"> <label for="Gambar">gambar</label> <input type="file" name="gambar"
                                    class="form-control" id="gambar" value="{{ $employee->gambar }}"
                                    aria-describedby="gambar"> </div>
                            <div class="form-group"> <label for="nama">Nama</label> <input type="nama" name="nama"
                                    class="form-control" id="nama" value="{{ $employee->nama }}"
                                    aria-describedby="nama"> </div>
                            <div class="form-group"> <label for="jenisKelamin">jenisKelamin</label> <input
                                    type="jenisKelamin" name="jenisKelamin" class="form-control" id="jenisKelamin"
                                    value="{{ $employee->jenisKelamin }}" aria-describedby="jenisKelamin"> </div>
                            <div class="form-group"> <label for="jabatan">jabatan</label> <input
                                    type="jabatan" name="jabatan" class="form-control" id="jabatan"
                                    value="{{ $employee->jabatan }}" aria-describedby="jabatan"> </div>
                            <div class="form-group"> <label for="nohp">No.Hp</label> <input type="nohp" name="nohp"
                                    class="form-control" id="nohp" value="{{ $employee->nohp }}"
                                    aria-describedby="nohp"> </div> <button type="submit"
                                class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
</div> @endsection
