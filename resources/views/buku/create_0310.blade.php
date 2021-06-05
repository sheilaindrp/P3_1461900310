@extends('layouts.app_0310')

@section('title', 'Tambah Buku')

@section('content')
    <h1 class="mt-4 mb-4">TAMBAH BUKU</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukan Judul" aria-label="Username" aria-describedby="basic-addon1" name="judul">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukan Tahun Terbit" aria-label="Username" aria-describedby="basic-addon1" name="tahun_terbit">
        </div>
        <div class="input-group">
            <button class="btn btn-success" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
