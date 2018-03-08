<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		return view('admin.index');
	}

	public function reportbuku()
	{
		$data['buku'] = \App\daftar_buku::all();
		$pdf = PDF::loadview('admin.buku.pdf', $data);
		return $pdf->stream();
	}

	public function indexbuku(){
		return view('admin.buku.index');
	}

	public function addbuku(){
		return view('admin.buku.add');
	}

	public function postbuku(Request $r){
		$q = new \App\daftar_buku;
		$q->kodebuku = $r->input('kodebuku');
		$q->judulbuku = $r->input('judulbuku');
		$q->pengarang = $r->input('pengarang');
		$q->kategori = $r->input('kategori');
		$q->save();
		return redirect(url('admin/buku'));
	}

	public function editbuku($id){
		$buku = \App\daftar_buku::find($id);
		return view('admin.buku.edit')->with('buku',$buku);
	}

	public function updatebuku(Request $r){
		$q =  \App\daftar_buku::find($r->input('id'));
		$q->kodebuku = $r->input('kodebuku');
		$q->judulbuku = $r->input('judulbuku');
		$q->pengarang = $r->input('pengarang');
		$q->kategori = $r->input('kategori');
		$q->save();
		return redirect(url('admin/buku'));
	}

	public function deletebuku($id){
		$buku = \App\daftar_buku::find($id);
		$buku->delete();
		return redirect(url('admin/buku'));
	}

	public function indexstokbuku(){
		return view('admin.stokbuku.index');
	}

	public function addstokbuku(){
		return view('admin.stokbuku.add');
	}

	public function poststokbuku(Request $r){
		$q = new \App\stok_buku;
		$q->judulbuku = $r->input('judulbuku');
		$q->nomor_rak = $r->input('nomorrak');
		$q->jumlahbuku = $r->input('jumlahbuku');
		$q->save();
		return redirect(url('admin/stokbuku'));
	}

	public function reportstokbuku()
	{
		$data['buku'] = \App\stok_buku::all();
		$pdf = PDF::loadview('admin.stokbuku.pdf', $data);
		return $pdf->stream();
	}

	public function deletestokbuku($id){
		$buku = \App\stok_buku::find($id);
		$buku->delete();
		return redirect(url('admin/stokbuku'));
	}

	public function indexuser(){
		return view('admin.user.index');
	}

	public function adduser(){
		return view('admin.user.add');
	}

	public function postuser(Request $r){
		$q = new \App\User;
		$q->username = $r->input('username');
		$q->password = bcrypt($r->input('password'));
		$q->status = $r->input('status');
		$q->save();
		return redirect(url('admin/user'));
	}

	public function edituser($id){
		$user = \App\User::find($id);
		return view('admin.user.edit')->with('user',$user);
	}

	public function updateuser(Request $r){
		$q =  \App\User::find($r->input('id'));
		$q->username = $r->input('username');
		$q->password = bcrypt($r->input('password'));
		$q->status = $r->input('status');
		$q->save();
		return redirect(url('admin/user'));
	}

	public function deleteuser($id){
		$user = \App\User::find($id);
		$user->delete();
		return redirect(url('admin/user'));
	}

	public function reportuser()
	{
		$data['user'] = \App\User::all();
		$pdf = PDF::loadview('admin.user.pdf', $data);
		return $pdf->stream();
	}
}
