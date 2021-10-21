@extends('layout.master')

@section('judul')
    Halaman Index Data
@endsection

@section('isi')
    <a href="/cast/create" class="btn btn-primary">Tambah</a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Bio</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->umur}}</td>
                    <td>{{$value->bio}}</td>
                    <td>
                        <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/cast/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="5">
                    <td class>No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection