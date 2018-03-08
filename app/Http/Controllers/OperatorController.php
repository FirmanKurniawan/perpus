<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		return view('operator.index');
	}

	public function postpeminjaman(Request $r){
		$pem = new \App\peminjaman;
		$pem->namapeminjam = $r->input('namapeminjam');
		$pem->alamatpeminjam = $r->input('alamat');
		$pem->judulbuku = $r->input('judulbuku');
		$pem->tanggalpinjam = $r->input('tanggalpinjam');
		$pem->statuspeminjaman = 1;
		$pem->save();
		return redirect(url('operator'));
	}

	public function pengembalian(){
		$pem = \App\peminjaman::all();
		return view('operator.pengembalian')->with('pem',$pem);
	}

	public function search(Request $r)
    {
      $query = $r->input('query');
      $show = \App\peminjaman::where('namapeminjam',$query)->get();
      return view('operator.pengembalian')->with('pem', $show);
  }
}
