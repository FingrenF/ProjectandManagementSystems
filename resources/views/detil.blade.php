@extends('master')
@section('title', 'Data Detil Tugas')

@section('content')
<div class="container mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">{{Session::get('pesan')}}</div>
    @endif

    <h2>Data Detil Tugas</h2>
    <p><a href="/createdetil">
            <button class="btn btn-success mb-2">Tambah Detil Tugas</button></a></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Detil</th>
        <th>ID Tugas</th>
        <th>ID Anggota</th>
        <th>Nama Pekerjaan</th>
        <th>Edit</th>
        <th>Hapus</th>	
		</tr>
	</thead> 

    <tbody>
            @foreach ($data_detil as $detil)
            <tr>
                <td style="text-align:center">{{$detil->id}}</td>
                <td style="text-align:center">{{$detil->idAnggota}}</td>
                <td style="text-align:center">{{$detil->idTugas}}</td>
                <td>{{$detil->namaPekerjaan}}</td>
                <td style="text-align:center"><a href="{{route('ubahdetil', $detil->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td style="text-align:center">
                    <form action="{{route('hapusdetil', $detil->id)}}" method="post">
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