<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use DB;
use Datatables;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboard(){
	    return view('dashboard');
	}

	public function insertMobil(Request $req){
		Mobil::create([
		  'nm_mobil' 	=> $req->input('nm_mobil'),
		  'harga_mobil' => $req->input('harga_mobil'),
		  'stock' 		=> $req->input('stock'),
		]);

		return redirect()->back();
	}

	public function showData(){
		$mobil = DB::table('mobil')->select('*');
        return datatables()->of($mobil)
        		->addColumn('action', function($item) {
                    $data = array(
                       'id' => '1'
                    );
                    return $data;
                })
            ->make(true);
	}

	public function hapusMobil($id)
	{
		DB::table('mobil')->where('id', $id)->delete();
    	
 
    	return redirect('/dashboard');
	}
}
