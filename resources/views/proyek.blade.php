@extends('master')
@section('title', 'Data Proyek')

@section('content')
<div class="container mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">{{Session::get('pesan')}}</div>
    @endif

    <h2>Data Proyek</h2>
    <p><a href="/createproyek">
            <button class="btn btn-success mb-2">Tambah Proyek</button></a></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Proyek</th>
        <th>Nama Proyek</th>
        <th>Deskripsi Proyek</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Status Proyek</th>
        <th>Edit</th>
        <th>Hapus</th>	
		</tr>
	</thead> 
      <tbody>
         @foreach ($data_proyek as $proyek)
            <tr>
                <td style="text-align:center">{{$proyek->id}}</td>
                <td>{{$proyek->namaProyek}}</td>
                <td>{{$proyek->deskripsiProyek}}</td>
                <td style="text-align:center">{{date_format(date_create($proyek->tglMulai), 'd F Y') }}</td>
                <td style="text-align:center">{{date_format(date_create($proyek->tglSelesai), 'd F Y') }}</td>
                <td>{{$proyek->statusProyek}}</td>
                <td style="text-align:center"><a href="{{route('ubahproyek', $proyek->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td style="text-align:center">
                    <form action="{{route('hapusproyek', $proyek->id)}}" method="post">
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