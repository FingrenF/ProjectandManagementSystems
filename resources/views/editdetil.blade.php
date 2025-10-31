@extends('master')
@section('title', 'Edit Detil Tugas')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Edit Detil Tugas</h2>
    <form method="post" action="{{route('modifdetil', $detil->id)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="idAnggota" class="form-label">ID Anggota</label>
            <input type="text" class="form-control @error('idAnggota') is-invalid @enderror" id="idAnggota" name="idAnggota"
                value="{{$detil->idAnggota}}">
            @error('idAnggota')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="idTugas" class="form-label">ID Tugas</label>
            <input type="text" class="form-control @error('idTugas') is-invalid @enderror" id="idTugas"
                name="idTugas" value="{{$detil->idTugas}}">
            @error('idTugas')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="namaPekerjaan" class="form-label">Nama Pekerjaan</label>
            <input type="text" class="form-control @error('namaPekerjaan') is-invalid @enderror" id="namaPekerjaan"
                name="namaPekerjaan" value="{{$detil->namaPekerjaan}}">
        </div>
        @error('namaPekerjaan')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Hapus</button>
        </div>
    </form>
</div>
@endsection