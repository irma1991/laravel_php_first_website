<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }

    public function home(){
        return view('skelbimai.pages.home');
    }

    public function showAds(){
        return view('skelbimai.pages.all_ads');
    }
}