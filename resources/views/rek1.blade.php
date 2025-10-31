@extends('master') 
@section('title', 'Rekapitulasi Jumlah Tugas per Status') 

@section('content')
<div class="container mt-3">
  <h2>Rekapitulasi Jumlah Tugas per Status</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
		<th>Status Tugas</th>
        <th>Jumlah Tugas</th>
	  </tr>
	</thead> 
    <tbody>
      @foreach ($data_rek1 as $rek1)
          <tr>
	          <td style="text-align:center">{{$rek1->statusTugas}}</td>
            <td style="text-align:center">{{$rek1->jumlahTugas}}</td>
          </tr>
	      @endforeach  
	</tbody>
  </table>	 
</div>
@endsection
