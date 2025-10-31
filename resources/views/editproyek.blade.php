@extends('master')
@section('title', 'Edit Proyek')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Edit Proyek</h2>
    <form method="post" action="{{route('modifproyek', $proyek->id)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="namaProyek" class="form-label">Nama Proyek</label>
            <input type="text" class="form-control @error('namaProyek') is-invalid @enderror" id="namaProyek" name="namaProyek"
                value="{{$proyek->namaProyek}}">
            @error('namaProyek')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="deskripsiProyek" class="form-label">Deskripsi Proyek</label>
            <input type="text" class="form-control @error('deskripsiProyek') is-invalid @enderror" id="deskripsiProyek"
                name="deskripsiProyek" value="{{$proyek->deskripsiProyek}}">
            @error('deskripsiProyek')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="tglMulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control @error('tglMulai') is-invalid @enderror" id="tglMulai"
                name="tglMulai" value="{{$proyek->tglMulai}}">
        </div>
        @error('tglMulai')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="tglSelesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control @error('tglSelesai') is-invalid @enderror" id="tglSelesai"
                name="tglSelesai" value="{{$proyek->tglSelesai}}">
        </div>
        @error('tglSelesai')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="radio1" class="form-label">Status Proyek</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="statusProyek" value="Dalam Progress"
                @php if($proyek->statusProyek == 'Dalam Progress'){print('checked');} @endphp>
                <label class="form-check-label" for="radio1">Dalam Progress</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="statusProyek" value="Selesai" 
                @php if($proyek->statusProyek == 'Selesai'){print('checked');} @endphp>
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