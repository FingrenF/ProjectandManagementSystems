@extends('master') 
@section('title', 'Rekapitulasi Jumlah Proyek per Tahun') 

@section('content')
<div class="container mt-3">
  <h2>Rekapitulasi Jumlah Proyek per Tahun</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
		    <th>Tahun</th>
        <th>Jumlah Proyek</th>
	  </tr>
	</thead> 
    <tbody>
      @foreach ($data_rek2 as $rek2)
          <tr>
	          <td style="text-align:center">{{$rek2->tahun}}</td>
            <td style="text-align:center">{{$rek2->jumlahProyek}}</td>
          </tr>
	      @endforeach  
	</tbody>
  </table>	 
</div>
@endsection
