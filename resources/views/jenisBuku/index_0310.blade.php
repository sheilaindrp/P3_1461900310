@extends('layouts.app_0310')

@section('title', 'Jenis Buku')

@section('content')
    <a href="{{ route('jenisBuku.create') }}" class="btn btn-primary mb-4 mt-4">Tambah Jenis Buku</a>
    <form action="{{ route('jenisBuku.index') }}" method="GET">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{ request()->get('query') }}" placeholder="Ketik Pencarian" aria-label="Username" aria-describedby="basic-addon1" name="query">
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-success" type="submit">FILTER</button>
        </div>
    </form>

    <h2>TABEL JENIS BUKU</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">JENIS</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $jenisBuku)
            <tr>
                <td>{{ $jenisBuku->jenis }}</td>
                <td>
                    <a href="{{ route('jenisBuku.show', $jenisBuku->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <form action="{{ route('jenisBuku.destroy', $jenisBuku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">HAPUS</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
