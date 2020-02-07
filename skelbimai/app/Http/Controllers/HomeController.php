<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }

    public function ads(){
        $ads = Ad::all();
        $categories = Category::all();
        return view('skelbimai.pages.ads', compact('ads'), compact('categories'));
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