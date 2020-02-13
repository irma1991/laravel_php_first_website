<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;
use File;

class AdController extends Controller
{

    public function __construct(){
        $this->middleware('auth', [
            'only' => [
                'adForm',
                'adManagement',
                'adDelete',
                'updateAd',
                'updateAd2'
            ]
        ]);
    }
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
            'image' => 'mimes:jfif,jpeg,jpg,png,gif|required|max:1000',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required'
        ]);

        $path = $request->file('image')->store('public/images');
        $fileName = str_replace('public/', "", $path);

        $ad = Ad::create([
            'catId' => request('category'),
            'name' => request('title'),
            'description' => request('description'),
            'img' => $fileName,
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location')
        ]);
        return redirect('/ads');
    }

    public static function adDelete(Ad $ad){
        $ad->delete();
        return redirect('/ad_management');
    }

    public function updateAd(Ad $ad){
        return view('skelbimai.pages.ad_update', compact('ad'));
    }

    public function updateAd2(Ad $ad, Request $request){
        $validateData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jfif,jpeg,jpg,png,gif|required|max:1000',
            'price' => 'required',
            'email' => 'required',
            'location' => 'required'
        ]);

        Ad::where('id', request('id'))->update(
        ['catId' => request('category'),
            'name' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location')
        ]);

        if($request->hasFile('image')){
            File::delete('../storage/app/public/'.$ad->img);
            $path = $request->file('image')->store('public/images');
            $fileName = str_replace('public/', "", $path);
            Ad::where('id', $ad->id)->update([
                'img' => $fileName
                ]);
        }

        return redirect('/ad_management');
    }
}
