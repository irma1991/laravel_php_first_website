<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryForm(){
        return view('skelbimai.pages.category_form');
    }

    public function storeCategory(Request $request){
        $validateData = $request->validate([
            'title' => 'required'
        ]);
        $cat = request('title');
        dd($cat);
    }
}
