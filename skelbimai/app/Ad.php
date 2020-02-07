<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['catId',
                            'name',
                            'description',
                            'img',
                            'price',
                            'email',
                            'phone',
                            'location'];
}
