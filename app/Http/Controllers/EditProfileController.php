<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class EditProfileController extends Controller
{
    public function index($id) {

		$users = User::find($id);
    	return view('pages.editProfile',compact('users'));
    }

     public function update(Request $request, $id)
     {

    	if($file = $request->file('displayPhoto'))
    	{
    		$name = $file->getClientOriginalName();

    		$file->move('avatar', $name);
   		
    	} else {
    		$name = "mad.png";
    	}


    		$users = User::find($id);
	    	$users->name = request('name');
	    	$users->bio = request('bio');
	    	$users->path = $name;
	    	$users->save();

	    	return back();
    }

    public function updatePassword(Request $request,$id)
    {
    	$this->validate(request(),[
    		'password' => 'required|confirmed'
    	]);

    	$userPassword = User::find($id);
    	$userPassword->password = bcrypt(request('password'));
    	$userPassword->save();

    	return back();
    }
}
