<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $fillable = ['id',
                            'adId',
                            'userId',
                            'name',
                            'comment'];

    public function ad(){
        return $this->belongsTo('Post::class');
    }

    public function user(){
        return $this->belongsTo('User::class');
    }
}
