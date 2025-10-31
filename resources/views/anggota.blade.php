@extends('master')
@section('title', 'Data Anggota')

@section('content')
<div class="container mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">{{Session::get('pesan')}}</div>
    @endif

    <h2>Data Anggota</h2>
    <p><a href="/createanggota">
            <button class="btn btn-success mb-2">Tambah Anggota</button></a></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Anggota</th>
        <th>ID Tim</th>
        <th>Nama Anggota</th>
        <th>Posisi</th>
        <th>Tanggal Bergabung</th>
        <th>Edit</th>
        <th>Hapus</th>	
		</tr>
	</thead> 

        <tbody>
            @foreach ($data_anggota as $anggota)
            <tr>
                <td style="text-align:center">{{$anggota->id}}</td>
                <td style="text-align:center">{{$anggota->idTim}}</td>
                <td>{{$anggota->namaAnggota}}</td>
                <td>{{$anggota->posisi}}</td>
                <td style="text-align:center">{{date_format(date_create($anggota->tglBergabung), 'd F Y') }}</td>
                <td style="text-align:center"><a href="{{route('ubahanggota', $anggota->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td style="text-align:center">
                    <form action="{{route('hapusanggota', $anggota->id)}}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-sm" onClick="return confirm('Yakin mau dihapus?')">
                            Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</form>
@endsection