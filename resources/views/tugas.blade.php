@extends('master')
@section('title', 'Data Tugas')

@section('content')
<div class="container mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">{{Session::get('pesan')}}</div>
    @endif

    <h2>Data Tugas</h2>
    <p><a href="/createtugas">
            <button class="btn btn-success mb-2">Tambah Tugas</button></a></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Tugas</th>
        <th>ID Proyek</th>
        <th>ID Tim</th>
        <th>Deskripsi Tugas</th>
        <th>Deadline</th>
        <th>Status Tugas</th>
        <th>Edit</th>
        <th>Hapus</th>	
		</tr>
	</thead> 

    <tbody>
         @foreach ($data_tugas as $tugas)
            <tr>
                <td style="text-align:center">{{$tugas->id}}</td>
                <td>{{$tugas->idProyek}}</td>
                <td>{{$tugas->idTim}}</td>
                <td>{{$tugas->deskripsiTugas}}</td>
                <td style="text-align:center">{{date_format(date_create($tugas->deadline), 'd F Y') }}</td>
                <td style="text-align:center">{{$tugas->statusTugas}}</td>
                <td style="text-align:center"><a href="{{route('ubahtugas', $tugas->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td style="text-align:center">
                    <form action="{{route('hapustugas', $tugas->id)}}" method="post">
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