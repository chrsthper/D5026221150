<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table bank
		// $bank = DB::table('bank')->get();

        $bank = DB::table('bank')->get();

    	// mengirim data bank ke view index3
		return view('index3',['bank' => $bank]);

	}

	// method untuk menampilkan view form tambah bank
	public function tambah3()
	{
// memanggil view tambah
return view('tambah3');

}
//
// method untuk insert data ke table bank
public function store(Request $request)
{
    //check kalo 'merkbank' diisi
    if(empty($request->merkbank)) {
        return redirect('/bank/tambah3')->with('error', 'Merk Bank cannot be empty');
    }

    // insert data ke table bank
    DB::table('bank')->insert([
        'merkbank' => $request->merkbank,
        'jumlahbank' => $request->jumlahbank,
        'tersedia' => $request->tersedia
    ]);
    // alihkan halaman ke halaman bank
    return redirect('/bank');

}

}
