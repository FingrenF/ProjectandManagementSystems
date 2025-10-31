@extends('master')
@section('title', 'Tambah Anggota Tim')

@section('content')
<div class="container mb-3 mt-3">
    <h2>Tambah Anggota Tim</h2>
    <form method="post" action="/saveanggota">
        @csrf
        <div class="mb-3 mt-3">
            <label for="idTim" class="form-label">Id Tim</label>
            <input type="text" class="form-control @error('idTim') is-invalid @enderror" id="idTim" name="idTim"
                value="{{old('idTim')}}">
            @error('idTim')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="namaAnggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control @error('namaAnggota') is-invalid @enderror" id="namaAnggota"
                name="namaAnggota" value="{{old('namaAnggota')}}">
            @error('namaAnggota')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi"
                name="posisi" value="{{old('posisi')}}">
            @error('posisi')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="tglBergabung" class="form-label">Tanggal Bergabung</label>
            <input type="date" class="form-control @error('tglBergabung') is-invalid @enderror" id="tglBergabung"
                name="tglBergabung" value="{{old('tglBergabung')}}">
        </div>
        @error('tglBergabung')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="mb-3 mt-3">
            <button class="btn btn-success mb-2" type="submit">Simpan</button>
            <button class="btn btn-success mb-2" type="reset">Hapus</button>
        </div>
    </form>
</div>
@endsection