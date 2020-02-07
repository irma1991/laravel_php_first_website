<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function adForm(){
        $categories = Category::all();
        return view('skelbimai.pages.ad_form', compact('categories'));
    }

    public function adManagement(){
        $ads = Ad::all();
        return view('skelbimai.pages.ad_management', compact('ads'));
    }

    public function adAdd(Request $request){
        $validateData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required'
        ]);

        $ad = Ad::create([
            'catId' => request('category'),
            'name' => request('title'),
            'description' => request('description'),
            'img' => request('image'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location')
        ]);
        return redirect('/ads');
    }
}
