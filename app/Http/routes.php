<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function() {
	return 'Hello World';
});

//Route::get('pengguna/{pengguna}',function ($pengguna)
	//{
	//	return"Hello World dari pengguna $pengguna";
//});

Route::get('kelasd2/framework/{mhs?}',function($mhs="Anonim"){
	return"Selamat Datang $mhs";
});
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');

Route::get('jadwal_matakuliah','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');