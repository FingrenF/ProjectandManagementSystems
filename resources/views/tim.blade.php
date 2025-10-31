@extends('master')
@section('title', 'Data Tim Proyek')

@section('content')
<div class="container mt-3">
    @if(Session::has('pesan'))
    <div class="alert alert-danger">{{Session::get('pesan')}}</div>
    @endif

    <h2>Data Tim Proyek</h2>
    <p><a href="/createtim">
            <button class="btn btn-success mb-2">Tambah Tim</button></a></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Tim</th>
        <th>Nama Tim</th>
        <th>Jumlah Anggota</th>
        <th>Tanggal Pembentukan</th>
        <th>Edit</th>
        <th>Hapus</th>	
		</tr>
	</thead> 

        <tbody>
            <tr>
            @foreach ($data_tim as $tim)
            <tr>
                <td style="text-align:center">{{$tim->id}}</td>
                <td>{{$tim->namaTim}}</td>
                <td style="text-align:center">{{$tim->jumlahAnggota}}</td>
                <td style="text-align:center">{{date_format(date_create($tim->tglPembentukan), 'd F Y') }}</td>
                <td style="text-align:center"><a href="{{route('ubahtim', $tim->id)}}">
                        <button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td style="text-align:center">
                    <form action="{{route('hapustim', $tim->id)}}" method="post">
                        @csrf
                        <button class="btn btn-primary btn-sm" onClick="return confirm('Yakin mau dihapus?')">
                            Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>
</form>
@endsection