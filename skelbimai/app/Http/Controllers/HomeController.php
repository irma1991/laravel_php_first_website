<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }
    public function profile(){
        $darbuotojai = [
            'Jonas',
            'Petras',
            'Antanas',
            'Albinas'
        ];
        return view('skelbimai.pages.profile', compact("darbuotojai"));
    }
    public function home(){
        return view('home');
    }
}