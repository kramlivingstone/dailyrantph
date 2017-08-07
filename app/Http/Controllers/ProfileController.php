<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index($id){
    	$users = User::find($id);
    	$userPosts = User::find($id)->posts;

    	return view('pages.profile', compact('users','userPosts'));
    }

   
}
