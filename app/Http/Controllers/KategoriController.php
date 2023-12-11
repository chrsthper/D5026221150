<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index4()
	{
    	// mengambil data dari table flashdisk
		//$flashdisk = DB::table('flashdisk')->get();
        $kategori = DB::table('kategori')->get();
    	// mengirim data flashdisk ke view index4
		return view('index4',['kategori' => $kategori]);
    }

    public function hasil(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('viewkategori', [
            'selectedKategoriId' => $selectedKategoriId]);
    }
}

