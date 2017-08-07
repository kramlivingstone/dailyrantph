<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Likes;
use Auth;

class LikesController extends Controller
{
   public function like(Request $request, $id)
   {
   		$like = new Likes();
   		$like->user_id = Auth::user()->id;
   		$like->post_id = $id;
   		$like->save();

   		$likes = Post::find($id)->likes->count();
   		return view('pages.likes',compact('likes'));
   }
   public function unlike(Request $request, $id)
   {
   		$unlike = Likes::where('post_id',$id)->where('user_id',Auth::user()->id)->first();
   		$unlike->delete();


   		$likes = Post::find($id)->likes->count();
   		return view('pages.likes',compact('likes'));
   }
}
