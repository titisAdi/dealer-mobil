<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Penjualan;
use DB;
use Datatables;
use App\Http\Controllers\Controller;

class PenjualanController extends Controller
{
    public function showPenjualan(){
	    return view('penjualan');
	}

	public function insertPenjualan(Request $req){
		Penjualan::create([
		  'nm_pembeli' 		=> $req->input('nm_pembeli'),
		  'email_pembeli' 	=> $req->input('email_pembeli'),
		  'nomor_telepon' 	=> $req->input('nomor_telepon'),
		  'mobil_dibeli' 	=> $req->input('mobil_dibeli'),
		]);

		return redirect()->back();
	}

	public function showData(){
		$mobil = DB::table('penjualan')->select('*');
        return datatables()->of($mobil)
        		->addColumn('action', function($item) {
                    $data = array(
                       'id' => '1'
                    );
                    return $data;
                })
            ->make(true);
	}
}
