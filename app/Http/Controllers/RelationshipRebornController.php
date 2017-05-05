<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class RelationshipRebornController extends Controller
{
    public function ujiHas()
    {
    	$data = dosen::has('dosen_matakuliah')->get();
    	dd($data);  
    }
    public function ujiDoesntHave()
    {
    	$data = dosen::doesntHave('dosen_matakuliah')->get();
    	dd($data);
    }
}
