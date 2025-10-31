@extends('master') 
@section('title', 'Rekapitulasi Total Durasi Pengerjaan per Proyek') 

@section('content')
<div class="container mt-3">
  <h2>Rekapitulasi Total Durasi Pengerjaan per Proyek</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
		<th>Nama Proyek</th>
        <th>Total Durasi Pengerjaan</th>
	  </tr>
	</thead> 
    <tbody>
        @foreach ($data_rek4 as $rek4)
          <tr>
	          <td style="text-align:center">{{$rek4->namaProyek}}</td>
            <td style="text-align:center">{{$rek4->totalDurasiPengerjaan}} Hari</td>
          </tr>
	      @endforeach  
	</tbody>
  </table>	 
</div>
@endsection
