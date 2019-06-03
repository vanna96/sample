<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        Category::create([
            'name' => $request->name
        ]);
        return Response::json($request->all());
    }
}
