@extends('master')
@section('title', 'Edit Tugas')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Edit Tugas</h2>
    <form method="post" action="{{route('modiftugas', $tugas->id)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="idProyek" class="form-label">ID Proyek</label>
            <input type="text" class="form-control @error('idProyek') is-invalid @enderror" id="idProyek" name="idProyek"
                value="{{$tugas->idProyek}}">
            @error('idProyek')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="idTim" class="form-label">ID Tim</label>
            <input type="text" class="form-control @error('idTim') is-invalid @enderror" id="idTim"
                name="idTim" value="{{$tugas->idTim}}">
            @error('idTim')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="deskripsiTugas" class="form-label">Deskripsi Tugas</label>
            <input type="text" class="form-control @error('deskripsiTugas') is-invalid @enderror" id="deskripsiTugas"
                name="deskripsiTugas" value="{{$tugas->deskripsiTugas}}">
        </div>
        @error('tglMulai')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline"
                name="deadline" value="{{$tugas->deadline}}">
        </div>
        @error('tglSelesai')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">Status Tugas</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="statusTugas" value="Dalam Progress"
                @php if($tugas->statusTugas == 'Dalam Progress'){print('checked');} @endphp>
                <label class="form-check-label" for="radio1">Dalam Progress</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statusTugas" value="Selesai"
                @php if($tugas->statusTugas == 'Selesai'){print('checked');} @endphp>
                <label class="form-check-label" for="radio2">Selesai</label>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Hapus</button>
        </div>
    </form>
</div>
@endsection