<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategory(Request $request){
        return view('admin.category.create');
    }
    public function storeCategory(Request $request){
        dd($request->all());
        return view('admin.category.create');
    }


    public function listCategory(){
        return view('admin.category.list');
    }
}
