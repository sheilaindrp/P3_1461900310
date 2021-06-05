@extends('layouts.app_0310')

@section('title', 'Tambah Jenis Buku')

@section('content')
    <h1 class="mt-4 mb-4">TAMBAH JENIS BUKU</h1>
    <form action="{{ route('jenisBuku.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukan Jenis" aria-label="Username" aria-describedby="basic-addon1" name="jenis">
        </div>
        <div class="input-group">
            <button class="btn btn-success" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
