<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data nilaikuliah ke view index2
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambah2()
	{
// memanggil view tambah
return view('tambah2');

}

// method untuk insert data ke table nilaikuliah
public function store(Request $request)
{
    //check kalo 'nrp' diisi
    if(empty($request->nrp)) {
        return redirect('/nilaikuliah/tambah2')->with('error', 'NRP cannot be empty');
    }

    // insert data ke table nilaikuliah
    DB::table('nilaikuliah')->insert([
        'nrp' => $request->nrp,
        'nilai_angka' => $request->nilai_angka,
        'sks' => $request->sks
    ]);
    // alihkan halaman ke halaman nilaikuliah
    return redirect('/nilaikuliah');

}

}
