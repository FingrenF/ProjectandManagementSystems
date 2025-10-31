@extends('master') 
@section('title', 'Laporan Proyek yang Sedang Berjalan') 

@section('content')
<div class="container mt-3">
  <h2>Laporan Proyek yang Sedang Berjalan</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Proyek</th>
        <th>Nama Proyek</th>
        <th>Deskripsi Proyek</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Status Proyek</th>
		</tr>
	</thead> 

        <tbody>
        @foreach ($data_lap1 as $lap1)
          <tr>
	          <td style="text-align:center">{{$lap1->id}}</td>
            <td>{{$lap1->namaProyek}}</td>		
		        <td>{{$lap1->deskripsiProyek}}</td> 		  
		        <td style="text-align:center">{{date_format(date_create($lap1->tglMulai), 'd F Y') }}</td>
            <td style="text-align:center">{{date_format(date_create($lap1->tglSelesai), 'd F Y') }}</td>
            <td style="text-align:center">{{$lap1->statusProyek}}</td>
          </tr>
	      @endforeach  
        </tbody>
    </table>
	</tbody>
  </table>	 
</div>
@endsection
