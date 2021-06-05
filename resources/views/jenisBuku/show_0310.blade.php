@extends('layouts.app_0310')

@section('title', 'Edit Jenis Buku')

@section('content')
    <h1 class="mt-4 mb-4">EDIT JENIS BUKU</h1>
    <form action="{{ route('jenisBuku.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{ $data->jenis }}" placeholder="Masukan Jenis" aria-label="Username" aria-describedby="basic-addon1" name="jenis">
        </div>
        <div class="input-group">
            <button class="btn btn-success" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
