<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use App\User;
use Auth;

class CommentsController extends Controller
{
    public function store(Post $post) {

    	$this->validate(request(),['comment' => 'required|min:2']);

	// Comment::create([
	// 	'post_id' => $post->id,
	// 'user_id' => auth()->id(),
	// 	'comment' => request('comment')

	// 	]);

		$post->addComment(request('comment'));
		return view('pages.test',compact('post'));
	}
    public function update(Request $request, $id)
    {
        $comments = Comment::find($id);
        $comments->comment = request('comment');
        $comments->save();

        return back();
    }
}
