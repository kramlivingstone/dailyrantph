<?php

namespace App;
use Auth;


class Post extends Model
{
    protected $fillable = [
        'id', 'user_id', 'post', 'path',
    ];
	
    public function comments()
    {
    	return $this->hasMany(Comment::class)->oldest();
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($comment)
    {
    	Comment::create([
			'post_id' => $this->id,
			'user_id' => Auth::user()->id,
			'comment' => $comment
		]);
    }

    public function likes()
    {
    	return $this->hasMany(Likes::class);
    }

}

