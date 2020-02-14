<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model{
    protected $fillable = ['catId',
                            'name',
                            'description',
                            'img',
                            'userId',
                            'price',
                            'email',
                            'phone',
                            'location'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
