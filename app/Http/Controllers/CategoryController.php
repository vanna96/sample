<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{

    public function create(){
        return view('admin.category.create');
    }

    public function store(StoreCategory $request){
        Category::create([
            'name' => $request->name
        ]);
        dd(1);
        // return view();
    }
}
