<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Models\Proyek;
use App\Models\Tim;
use App\Models\Tugas;
use App\Models\Anggota;
use App\Models\DetilTugas;
use Illuminate\Support\Facades\DB; 

class ModelController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}

    //Proyek
    public function proyek()
	{	$data_proyek = Proyek::all();
		return view('proyek', compact('data_proyek'));
	}
	public function createproyek()
	{
		return view('createproyek');
	}


	public function saveproyek(Request $req)
	{
		$this->validate($req, [
			'namaProyek' => 'required|string',
			'deskripsiProyek' => 'required|string',
			'tglMulai' => 'required|date',
			'tglSelesai' => 'required|date'
		]);
		$proyek = new Proyek;
		$proyek->namaProyek = $req->namaProyek;
		$proyek->deskripsiProyek = $req->deskripsiProyek;
		$proyek->tglMulai = $req->tglMulai;
		$proyek->tglSelesai= $req->tglSelesai;
		$proyek->statusProyek = $req->statusProyek;
		$proyek->save();
		return redirect('/proyek')->with('pesan', 'Data proyek berhasil disimpan');
	}

	public function delproyek($id)
	{
		$proyek = Proyek::find($id);
		$proyek->delete();
		return redirect('/proyek')->with('pesan', 'Data Proyek berhasil dihapus');
	}

	public function editproyek($id)
	{
		$proyek = Proyek::find($id);
		return view('editproyek', compact('proyek'));
	}

	public function updateproyek(Request $req, $id)
	{
		$this->validate($req, [
			'namaProyek' => 'required|string',
			'deskripsiProyek' => 'required|string',
			'tglMulai' => 'required|date',
			'tglSelesai' => 'required|date',
		]);
		$proyek = Proyek::find($id);
		$proyek->namaProyek = $req->namaProyek;
		$proyek->deskripsiProyek = $req->deskripsiProyek;
		$proyek->tglMulai = $req->tglMulai;
		$proyek->tglSelesai= $req->tglSelesai;
		$proyek->statusProyek = $req->statusProyek;
		$proyek->update();
		return redirect('/proyek')->with('pesan', 'Data Proyek berhasil diubah');
	}

    //Tim
    public function tim()
	{	$data_tim = Tim::all();
		return view('tim', compact('data_tim'));
	}
	
	public function createtim()
	{
		return view('createtim');
	}

	public function savetim(Request $req)
	{	$this->validate($req, [
		'namaTim' => 'required|string',
		'jumlahAnggota' => 'required|gt:0',
		'tglPembentukan' => 'required|date',
		]);
		$tim = new Tim;
		$tim->namaTim = $req->namaTim;
		$tim->jumlahAnggota = $req->jumlahAnggota;
		$tim->tglPembentukan= $req->tglPembentukan;
		$tim->save();
		return redirect('/tim')->with('pesan', 'Data tim berhasil disimpan');
	}

	public function deltim($id)
	{
		$tim = Tim::find($id);
		$tim->delete();
		return redirect('/tim')->with('pesan', 'Data Proyek berhasil dihapus');
	}

	public function edittim($id)
	{
		$tim = Tim::find($id);
		return view('edittim', compact('tim'));
	}

	public function updatetim(Request $req, $id)
	{	$this->validate($req, [
		'namaTim' => 'required|string',
		'jumlahAnggota' => 'required|gt:0',
		'tglPembentukan' => 'required|date',
		]);
		$tim = Tim::find($id);
		$tim->namaTim = $req->namaTim;
		$tim->jumlahAnggota = $req->jumlahAnggota;
		$tim->tglPembentukan= $req->tglPembentukan;
		$tim->update();
		return redirect('/tim')->with('pesan', 'Data tim berhasil diubah');
	}


    //Tugas
    public function tugas()
	{	$data_tugas = Tugas::all();
		return view('tugas', compact('data_tugas'));
	}

	public function createtugas()
	{
		return view('createtugas');
	}


	public function savetugas(Request $req)
	{
		$this->validate($req, [
			'idTim' => 'required|gt:0',
			'idProyek' => 'required|gt:0',
			'deskripsiTugas' => 'required|string',
			'deadline' => 'required|date',
		]);
		$tugas = new Tugas;
		$tugas->idProyek = $req->idProyek;
		$tugas->idTim = $req->idTim;
		$tugas->deskripsiTugas = $req->deskripsiTugas;
		$tugas->deadline= $req->deadline;
		$tugas->statusTugas = $req->statusTugas;
		$tugas->save();
		return redirect('/tugas')->with('pesan', 'Data tugas berhasil disimpan');
	}

	public function deltugas($id)
	{
		$tugas = Tugas::find($id);
		$tugas->delete();
		return redirect('/tugas')->with('pesan', 'Data Tugas berhasil dihapus');
	}

	public function edittugas($id)
	{
		$tugas = Tugas::find($id);
		return view('edittugas', compact('tugas'));
	}

	public function updatetugas(Request $req, $id)
	{	$this->validate($req, [
		'idTim' => 'required|gt:0',
		'idProyek' => 'required|gt:0',
		'deskripsiTugas' => 'required|string',
		'deadline' => 'required|date',
		]);
		$tugas = Tugas::find($id);
		$tugas->idProyek = $req->idProyek;
		$tugas->idTim = $req->idTim;
		$tugas->deskripsiTugas = $req->deskripsiTugas;
		$tugas->deadline= $req->deadline;
		$tugas->statusTugas = $req->statusTugas;
		$tugas->update();
		return redirect('/tugas')->with('pesan', 'Data tugas berhasil diubah');
	}



    //Anggota
    public function anggota()
	{	$data_anggota = Anggota::all();
		return view('anggota', compact('data_anggota'));
	}

	public function createanggota()
	{
		return view('createanggota');
	}


	public function saveanggota(Request $req)
	{	$this->validate($req, [
		'idTim' => 'required|gt:0',
		'namaAnggota' => 'required|string',
		'posisi' => 'required|string',
		'tglBergabung' => 'required|date',
		]);
		$anggota = new Anggota;
		$anggota->idTim = $req->idTim;
		$anggota->namaAnggota = $req->namaAnggota;
		$anggota->posisi = $req->posisi;
		$anggota->tglBergabung = $req->tglBergabung;
		$anggota->save();
		return redirect('/anggota')->with('pesan', 'Data anggota berhasil disimpan');
	}

	public function delanggota($id)
	{
		$anggota = Anggota::find($id);
		$anggota->delete();
		return redirect('/anggota')->with('pesan', 'Data anggota berhasil dihapus');
	}

	public function editanggota($id)
	{
		$anggota = Anggota::find($id);
		return view('editanggota', compact('anggota'));
	}

	public function updateanggota(Request $req, $id)
	{	$this->validate($req, [
		'idTim' => 'required|gt:0',
		'namaAnggota' => 'required|string',
		'posisi' => 'required|string',
		'tglBergabung' => 'required|date',
		]);
		$anggota = Anggota::find($id);
		$anggota->idTim = $req->idTim;
		$anggota->namaAnggota = $req->namaAnggota;
		$anggota->posisi = $req->posisi;
		$anggota->tglBergabung = $req->tglBergabung;
		$anggota->update();
		return redirect('/anggota')->with('pesan', 'Data anggota berhasil diubah');
	}


    //Detil Tugas
    public function detil()
	{	$data_detil = DetilTugas::all();
		return view('detil', compact('data_detil'));
	}

	public function createdetil()
	{
		return view('createdetil');
	}


	public function savedetil(Request $req)
	{	$this->validate($req, [
		'idAnggota' => 'required|gt:0',
		'idTugas' => 'required|gt:0',
		'namaPekerjaan' => 'required|string',
		]);
		$detil= new DetilTugas;
		$detil->idAnggota = $req->idAnggota;
		$detil->idTugas = $req->idTugas;
		$detil->namaPekerjaan = $req->namaPekerjaan;
		$detil->save();
		return redirect('/detil')->with('pesan', 'Data detil berhasil disimpan');
	}

	public function deldetil($id)
	{
		$detil= DetilTugas::find($id);
		$detil->delete();
		return redirect('/detil')->with('pesan', 'Data detil berhasil dihapus');
	}

	public function editdetil($id)
	{
		$detil = DetilTugas::find($id);
		return view('editdetil', compact('detil'));
	}

	public function updatedetil(Request $req, $id)
	{	$this->validate($req, [
		'idAnggota' => 'required|gt:0',
		'idTugas' => 'required|gt:0',
		'namaPekerjaan' => 'required|string',
		]);
		$detil = DetilTugas::find($id);
		$detil->idAnggota = $req->idAnggota;
		$detil->idTugas = $req->idTugas;
		$detil->namaPekerjaan = $req->namaPekerjaan;
		$detil->update();
		return redirect('/detil')->with('pesan', 'Data detil berhasil diubah');
	}

    //Laporan
    public function lap1()
	{	$data_lap1 = DB::select(
		'SELECT *
		FROM Proyek
		WHERE statusProyek = "Dalam Progress";');
	   	return view('lap1', compact('data_lap1'));
	}

    public function lap2()
	{	$data_lap2 = DB::select(
		'SELECT *
		FROM tugas T
		JOIN proyek P ON P.id = T.idProyek
		WHERE T.deadline < P.tglSelesai AND statusTugas <> "Selesai";');
		return view('lap2', compact('data_lap2'));
	}

	public function searchLap2(Request $request)
	{
		$search = $request->input('search');
	
		$data_lap2 = DB::select(
			'SELECT *
			FROM tugas T
			JOIN proyek P ON P.id = T.idProyek
			WHERE T.deadline < P.tglSelesai AND statusTugas <> "Selesai"
				AND  T.deskripsiTugas LIKE ?',
			["%$search%"]
		);
	
		return view('lap2', compact('data_lap2'));
	}

    public function lap3()
	{	$data_lap3 = DB::select(
		'SELECT P.namaProyek, T.id idTugas, T.deskripsiTugas, T.deadline, T.statusTugas, A.namaAnggota
		FROM proyek P
		JOIN tugas T ON P.id = T.idProyek
		JOIN tim TP ON T.idTim = TP.id
		JOIN Anggota A ON TP.id = A.idTim;
		');
		return view('lap3', compact('data_lap3'));
	}
	public function searchLap3(Request $request)
	{
    	$search = $request->input('search');
    
    // Modify your query to include the search term
		$data_lap3 = DB::select(
        	'SELECT P.namaProyek, T.id idTugas, T.deskripsiTugas, T.deadline, T.statusTugas, A.namaAnggota
        	FROM proyek P
        	JOIN tugas T ON P.id = T.idProyek
	        JOIN tim TP ON T.idTim = TP.id
    	    JOIN Anggota A ON TP.id = A.idTim
        	WHERE P.namaProyek LIKE ? OR A.namaAnggota LIKE ? OR T.deskripsiTugas LIKE ?',
        	["%$search%", "%$search%", "%$search%"]
    	);


    	return view('lap3', compact('data_lap3'));
	}




    //Rekapitulasi
    public function rek1()
	{	$data_rek1 = DB::select(
		'SELECT statusTugas, COUNT(id) AS jumlahTugas
		FROM Tugas
		GROUP BY statusTugas;
		');
		return view('rek1', compact('data_rek1'));
	}

    public function rek2()
	{	$data_rek2 = DB::select(
		'SELECT YEAR(tglMulai) AS tahun, COUNT(id) AS jumlahProyek
		FROM Proyek
		GROUP BY Tahun;
		');
		return view('rek2', compact('data_rek2'));
	}

    public function rek3()
	{	$data_rek3 = DB::select(
		'SELECT P.namaProyek, AVG(DATEDIFF(T.deadline, P.tglMulai)) AS rataRataDeadline
		FROM Proyek P
		JOIN tugas T on P.id = T.idProyek
		GROUP BY P.namaProyek
		');
		return view('rek3', compact('data_rek3'));
	}

    public function rek4()
	{	$data_rek4 = DB::select(
		'SELECT P.namaProyek, SUM(DATEDIFF(P.tglSelesai, P.tglMulai)) AS totalDurasiPengerjaan
		FROM Proyek P
		JOIN tugas T ON P.id = T.idProyek
		GROUP BY P.namaProyek;
		');
		return view('rek4', compact('data_rek4'));
	}

    public function rek5()
	{	$data_rek5 = DB::select(
		'SELECT P.namaProyek, COUNT(A.id) AS jumlahAnggota
		FROM Proyek P
		JOIN Tugas T ON P.id = T.idProyek
		JOIN tim TP ON T.idTim = TP.id
		JOIN anggota A ON TP.id = A.idTim
		GROUP BY P.namaProyek;
		');
		return view('rek5', compact('data_rek5'));
	}
}