<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
    public function awal()
	{
		return "Hello dari Dosen_matakuliahController";
	}

public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen_matakuliah = new dosen_matakuliah;
	$dosen_matakuliah->id = '1';
	$dosen_matakuliah->save();
	return "data dengan id {$dosen_matakuliah->id} telah sisimpan";
}
}
