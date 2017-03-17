<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Http\Request;
use App\http\Controllers\Controller;
use Input;
use Redirect;
use Illuminate\Http\Request;

class Anggotacontroller extends Controller
{
    public function index ()
    $anggota = Anggota::all();
    return view('anggota.index',compact('anggota'));
}

public function create ()
{
	return view('anggota.create');

}

public function store(Request $request)
	{
	
	$input = Input::all();
	Anggota::create( $input );
 	return Redirect::route('anggota.index');
	}

public function show($id)
	{
		$anggota = Anggota::find($id);
		return view('anggota.show', compact('anggota'));

	}

public function edit($id)
	{
		$anggota = Anggota::find($id);
		return view('anggota.edit', compact('anggota'));
	}

public function update($id)
	{
	$anggota = Anggota::find($id);
	$input = array_except(Input::all(), '_method');
	$anggota->update($input);
 
	return Redirect::route('anggota.index');
	}

public function destroy($id)
	{
	$anggota = Anggota::find($id);
	$anggota->delete();
 
	return Redirect::route('anggota.index');
	}

}