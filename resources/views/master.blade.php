<!DOCTYPE html>
<html lang='en'>
<head>
  <title>@yield('title')</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='{{asset("css/bootstrap.min.css")}}' rel='stylesheet'>
  <script src='{{asset("js/bootstrap.bundle.min.js")}}'></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/proyek">Data Proyek</a></li>
            <li><a class="dropdown-item" href="/tim">Data Tim Proyek</a></li>
            <li><a class="dropdown-item" href="/tugas">Data Tugas Proyek</a></li>
            <li><a class="dropdown-item" href="/anggota">Data Anggota Tim</a></li>
            <li><a class="dropdown-item" href="/detil">Data Detil Tugas</a></li>
          </ul>
        </li>	
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/lap1">Laporan Proyek yang Sedang Berjalan</a></li>
            <li><a class="dropdown-item" href="/lap2">Laporan Tugas yang Melebihi Deadline</a></li>
            <li><a class="dropdown-item" href="/lap3">Laporan Tugas per Proyek dengan Anggota Tim</a></li>
          </ul>
        </li>		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Rekapitulasi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/rek1">Rekapitulasi Jumlah Tugas per Status</a></li>
            <li><a class="dropdown-item" href="/rek2">Rekapitulasi Jumlah Proyek per Tahun</a></li>
            <li><a class="dropdown-item" href="/rek3">Rekapitulasi Rata-rata Deadline Tugas per Proyek</a></li>
            <li><a class="dropdown-item" href="/rek4">Rekapitulasi Total Durasi Pengerjaan per Proyek</a></li>
            <li><a class="dropdown-item" href="/rek5">Rekapitulasi Jumlah Anggota Tim per Proyek</a></li>		
          </ul>
        </li>			  
    </ul>
  </div>
</nav>

@yield('content')
  
<footer class="bg-dark py-4 text-white mt-4"> 
   <div class="container text-center"> 
      <small class="text-center"> FRENDI WIDSNA
	  <BR>2021130014</small> 
   </div> 
</footer>
</body>
</html>
