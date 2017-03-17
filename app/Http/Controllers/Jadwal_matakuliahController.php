<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah
;
class Jadwal_matakuliahController extends Controller
{
    public function awal()
	{
		return "Hello dari Jadwal_matkuliahController";
	}

public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$jadwal_matakuliah = new jadwal_matakuliah;
	$jadwal_matakuliah->id = '1';
	$jadwal_matakuliah->save();
	return "data dengan id {$jadwal_matakuliah->id} telah sisimpan";
}
}
