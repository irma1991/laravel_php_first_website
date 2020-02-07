<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }

    public function ads(){
        $ads = Ad::select('id', 'title', 'description', 'img', 'price', 'email',
                            'phone', 'location')->join('categories', 'categories.id',
                            '=', 'ads.catId')->get();
        return view('skelbimai.pages.ads', compact('ads'));
    }

    public function showAd(){
        return view('skelbimai.pages.ad');
    }

    public function about(){
        return view('skelbimai.pages.about');
    }

    public function contact(){
        return view('skelbimai.pages.contact');
    }
}