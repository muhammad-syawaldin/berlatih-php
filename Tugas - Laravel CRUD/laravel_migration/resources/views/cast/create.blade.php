@extends('layout.master')

@section('judul')
    Halaman Tambah Data
@endsection

@section('isi')
    <div>
        <h2>Tambah Data</h2>
            <form action="/cast" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
                    @error('umur')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">
                    @error('bio')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
@endsection