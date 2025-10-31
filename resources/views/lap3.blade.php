@extends('master') 
@section('title', 'Laporan Tugas per Proyek dengan Anggota Tim') 

@section('content')
<div class="container mt-3">
  <h2>Laporan Tugas per Proyek dengan Anggota Tim</h2>   
  
  <form action="{{ route('lap3.search') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Cari dengan Nama Proyek atau Deskripsi Tugas atau Nama Anggota">
        <button type="submit" class="btn btn-outline-secondary">Cari</button>
    </div>
</form>
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Nama Proyek</th>
        <th>ID Tugas</th>
        <th>Deskripsi Tugas</th>
        <th>Deadline</th>
        <th>Status Tugas</th>
        <th>Nama Anggota</th>
		</tr>
	</thead> 
        <tbody>
        @foreach ($data_lap3 as $lap3)
          <tr>
	          <td style="text-align:center">{{$lap3->namaProyek}}</td>
            <td style="text-align:center">{{$lap3->idTugas}}</td>		
		        <td style="text-align:center">{{$lap3->deskripsiTugas}}</td> 		  
            <td style="text-align:center">{{date_format(date_create($lap3->deadline), 'd F Y') }}</td>
            <td style="text-align:center">{{$lap3->statusTugas}}</td>
            <td style="text-align:center">{{$lap3->namaAnggota}}</td>
          </tr>
	      @endforeach  
        </tbody>
    </table>
	</tbody>
  </table>	 
</div>
@endsection
