<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Ad;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, Ad $ad){
        $validateData = $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'comment' => request('comment'),
            'name' => 'Irma',
            'adId' => $ad->id,
            'userId' => Auth()->id()
        ]);

        return back();
    }
}
