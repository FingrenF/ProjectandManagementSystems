@extends('master') 
@section('title', 'Rekapitulasi Rata-rata Deadline Tugas per Proyek') 

@section('content')
<div class="container mt-3">
  <h2>Rekapitulasi Rata-rata Deadline Tugas per Proyek</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
		<th>Nama Proyek</th>
        <th>Rata-rata Deadline</th>
	  </tr>
	</thead> 
    <tbody>
        @foreach ($data_rek3 as $rek3)
          <tr>
            <td style="text-align:center">{{$rek3->namaProyek}}</td>
            <td style="text-align:center">{{ round($rek3->rataRataDeadline) }} Hari</td>
          </tr>
	      @endforeach  
	</tbody>
  </table>	 
</div>
@endsection
