<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $ads = Ad::select('ads.id', 'ads.name', 'ads.description','ads.price','ads.email',
            'ads.phone', 'ads.location',
            'categories.name as category')->join('categories', 'categories.id', "=",'ads.catId')
            ->get();
        return view('skelbimai.pages.home', compact('ads'));
    }

    public function ads(){
        $ads = Ad::select('ads.id', 'ads.name', 'ads.description','ads.price','ads.email',
            'ads.phone', 'ads.location',
            'categories.name as category')->join('categories', 'categories.id', "=",'ads.catId')
            ->paginate(2);
        return view ('skelbimai.pages.ads', compact('ads'));
    }

    public function showAd(Ad $ad){

        return view('skelbimai.pages.ad', compact('ad'));
    }

    public function about(){
        return view('skelbimai.pages.about');
    }

    public function contact(){
        return view('skelbimai.pages.contact');
    }
}