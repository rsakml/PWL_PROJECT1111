@extends('admin.layout')
 @section('content')

 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center mt-2">
            <Center>DATA KARYAWAN</Center>
        </div>
        <br>
        <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('employee.create') }}"> Input
                Data</a>
</div> 
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif 
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Gambar</th>
            <th>Nama Karyawan</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>No Hp</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employee as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><img height="200" width="180"  src="{{asset('img/'.$e->gambar)}}"></td>
                <td>{{ $e->nama }}</td>
                <td>{{ $e->jenisKelamin }}</td>
                <td>{{ $e->jabatan }}</td>
                <td>{{ $e->nohp }}</td>
                <td>
                    <form action="{{ route('employee.destroy', $e->id) }}" method="POST"> <a
                            class="btn btn-primary" href="{{ route('employee.edit', $e->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('employee.show', $e->id) }}">Show</a>
                        @csrf
                         @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button> </form>
                </td>
            </tr>
        @endforeach 
    </table>
    <br>
    <br>
    {{$employee -> links()}}
@endsection