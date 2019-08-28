<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboard(){
	    return view('dashboard');
	}

	public function insertMobil(Request $req){
		$mobil  			= new Mobil;
		$mobil->nm_mobil 	= $req->nm_mobil;
		$mobil->harga_mobil	= $req->harga_mobil;
		$mobil->stock 		= $req->stock;
		$mobil->save();
	}
}
