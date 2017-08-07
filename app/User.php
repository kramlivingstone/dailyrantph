<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    // public function getProfilePicture()
    // {
    //     if(! $this->attributes['path'])
    //     {
    //         return '/avatar/mad.png';
    //     }

    //     return $this->atrributes['path'];
    // }

    public function likes(){
        return $this->hasMany(Likes::class);
    }
}
