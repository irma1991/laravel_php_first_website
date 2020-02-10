<?php

namespace App\Http\Controllers;

use App\Category;
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
//        $cat = request('title');
//        dd($cat);
    $category = Category::create([
        'name' => request('title')
    ]);
    return redirect('/category_management');
}

    public function categoryManagement(){
        $categories = Category::all();
//        dd($categories);
        return view('skelbimai.pages.category_management', compact('categories'));
    }

    public static function categoryDelete(Category $category){
        $category->delete();
        return redirect('/category_management');
    }

}
