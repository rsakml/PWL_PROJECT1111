@extends('admin.layout')
 @section('content')

 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center mt-2">
            <Center>DATA Supplier</Center>
        </div>
        <br>
        <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('supplier.create') }}"> Input
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
            <th>Nama Supplier</th>
            <th>Kategori</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($supplier as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td><img height="100" width="180"  src="{{asset('img/'.$s->gambar)}}"></td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kategori }}</td>
                <td>{{ $s->email }}</td>
                <td>
                    <form action="{{ route('supplier.destroy', $s->id) }}" method="POST"> <a
                            class="btn btn-primary" href="{{ route('supplier.edit', $s->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('supplier.show', $s->id) }}">Show</a>
                        @csrf
                         @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button> </form>
                </td>
            </tr>
        @endforeach 
    </table>
    <br>
    <br>
    {{$supplier -> links()}}
@endsection