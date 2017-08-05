<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index($id){
    	$posts = User::find($id)->posts;

    	return view('pages.profile', compact('posts'));
    }

}
