@extends('master')
@section('title', 'Tambah Tim Proyek')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Tambah Tim Proyek</h2>
    <form method="post" action="/savetim">
        @csrf
        <div class="mb-3 mt-3">
            <label for="namaTim" class="form-label">Nama Tim</label>
            <input type="text" class="form-control @error('namaTim') is-invalid @enderror" id="namaTim" name="namaTim"
                value="{{old('namaTim')}}">
            @error('namaTim')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="jumlahAnggota" class="form-label">Jumlah Anggota</label>
            <input type="text" class="form-control @error('jumlahAnggota') is-invalid @enderror" id="jumlahAnggota"
                name="jumlahAnggota" value="{{old('jumlahAnggota')}}">
            @error('jumlahAnggota')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="tglPembentukan" class="form-label">Tanggal Pembentukan</label>
            <input type="date" class="form-control @error('tglPembentukan') is-invalid @enderror" id="tglPembentukan"
                name="tglPembentukan" value="{{old('tglPembentukan')}}">
        </div>
        @error('tglPembentukan')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Hapus</button>
        </div>
    </form>
</div>
@endsection