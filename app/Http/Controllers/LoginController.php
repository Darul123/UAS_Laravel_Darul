<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }
    public function auth(Request $req) {
    	$this->validate($req, [
    		'username' => 'required',
    		'password' => 'required'
    	]);
    	$kd = $req->input('username');
    	$pwd = $req->input('password');
    	$user = login::where(['username' => $kd,  'password' => $pwd])->first();
    	if($user->username == $kd AND $user->password == $pwd) {
            Session::put('admin');
    		return redirect('/interioradmin');
        }
        else { return redirect('/login'); }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
