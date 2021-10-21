@extends('layout.master')

@section('judul')
    Halaman Show Data
@endsection

@section('isi')
    <h2>Show Cast {{$cast->id}}</h2>
    <h4>{{$cast->nama}}</h4>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>
@endsection