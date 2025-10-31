@extends('master') 
@section('title', 'Rekapitulasi Jumlah Anggota Tim per Proyek') 

@section('content')
<div class="container mt-3">
  <h2>Rekapitulasi Jumlah Anggota Tim per Proyek</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
		<th>Nama Proyek</th>
        <th>Jumlah Anggota</th>
	  </tr>
	</thead> 
    <tbody>
        @foreach ($data_rek5 as $rek5)
          <tr>
	          <td style="text-align:center">{{$rek5->namaProyek}}</td>
            <td style="text-align:center">{{$rek5->jumlahAnggota}}</td>
          </tr>
	      @endforeach  
	</tbody>
  </table>	 
</div>
@endsection
