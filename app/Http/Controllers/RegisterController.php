<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create() {

    	return view('register.create');
    }

    public function store() {

    	$this->validate(request(),[
    		'name' => 'required',

    		'username' => 'required',

    		'email' => 'required|email',

    		'password' => 'required|confirmed'

    	]);
   
    	$user = User::create([
    		'name' => request('name'),
    		'username' => request('username'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))
    	]);


    	auth()->login($user);

    	

    	return redirect()->home();
    }
}
