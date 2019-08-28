<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Hash;

class LoginController extends Controller
{
    public function showLogin()
	{
	    return view('login');
	}

	public function doLogin(Request $request)
	{
		$this->validate($request,[
			'nomor_pegawai'		=> 'required',
			'password'			=> 'required'
		]);

		$data	= [
			'nomor_pegawai'		=> $request->nomor_pegawai,
			'password'			=> $request->password
		];
		$users = DB::table('pengguna')
			->where(['number'=> $data['nomor_pegawai']])
			->first();

		if(Hash::check($data['password'], $users->password)){
			return redirect()->to('dashboard');
		}else{
			
		}
	}

}
