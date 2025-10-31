@extends('master') 
@section('title', 'Laporan Tugas yang Melebihi Deadline') 

@section('content')
<div class="container mt-3">
  <h2>Laporan Tugas yang Melebihi Deadline</h2>

  <form action="{{ route('lap2.search') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkans Deskripsi Tugas">
            <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </div>
    </form>
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>ID Tugas</th>
        <th>ID Proyek</th>
        <th>ID Tim</th>
        <th>Deskripsi Tugas</th>
        <th>Deadline</th>
        <th>Status Tugas</th>
		</tr>
	</thead> 
        <tbody>
        @foreach ($data_lap2 as $lap2)
          <tr>
	          <td style="text-align:center">{{$lap2->id}}</td>
            <td style="text-align:center">{{$lap2->idProyek}}</td>		
		        <td style="text-align:center">{{$lap2->idTim}}</td> 		  
		        <td style="text-align:center">{{$lap2->deskripsiTugas}}</td>
            <td style="text-align:center">{{date_format(date_create($lap2->deadline), 'd F Y') }}</td>
            <td style="text-align:center">{{$lap2->statusTugas}}</td>
          </tr>
	      @endforeach  
        </tbody>
    </table>
	</tbody>
  </table>	 
</div>
@endsection
