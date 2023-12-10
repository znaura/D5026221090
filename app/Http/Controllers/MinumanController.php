<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel minuman
        // $minuman = DB::table('minuman')->get();
        $minuman = DB::table('minuman')->paginate(5);

        //mengirim data minuman ke view index
        return view('indexDataMinuman', ['minuman' => $minuman]);
    }

    // method untuk menampilkan view form tambah minuman
    public function tambah()
    {// memanggil view tambah
	return view('tambahMinuman');
    }

    // method untuk insert data ke table minuman
    public function store(Request $request)
    {
	// insert data ke table minuman
	DB::table('minuman')->insert([
        'merkminuman' => $request->merkminuman,
        'stockminuman' => $request->stockminuman,
        'tersedia' => ($request->stockminuman > 0) ? 'y' : 'n',
	]);
	// alihkan halaman ke halaman minuman
	return redirect('/minuman');
    }

    // method untuk edit data minuman
    public function edit($id)
    {
	// mengambil data minuman berdasarkan id yang dipilih
	$minuman = DB::table('minuman')->where('kodeminuman',$id)->get();
	// passing data minuman yang didapat ke view edit.blade.php
	return view('editMinuman',['minuman' => $minuman]);
    }

    // update data minuman
    public function update(Request $request)
    {
	// update data minuman
	DB::table('minuman')->where('kodeminuman',$request->kodeminuman)->update([
        'merkminuman' => $request->merkminuman,
        'stockminuman' => $request->stockminuman,
        'tersedia' => ($request->stockminuman > 0) ? 'y' : 'n',
	]);
	// alihkan halaman ke halaman minuman
	return redirect('/minuman');
    }

    // method untuk hapus data minuman
    public function hapus($id)
    {
	// menghapus data minuman berdasarkan id yang dipilih
	DB::table('minuman')->where('kodeminuman',$id)->delete();

	// alihkan halaman ke halaman minuman
	return redirect('/minuman');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table minuman sesuai pencarian data
		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();

    		// mengirim data minuman ke view index
		return view('indexDataMinuman',['minuman' => $minuman]);

	}

    public function view($id)
    { // mengambil data minuman berdasarkan id yang dipilih
        $minuman = DB::table('minuman')->where('kodeminuman',$id)->get();
        // passing data minuman yang didapat ke view edit.blade.php
        return view('viewMinuman',['minuman' => $minuman]);
    }
}
