<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function edit($id){
        $category = Category::find($id);
        if ($category) {
            return view('admin.category.create', compact('category'));
        }
        return redirect()->route('category_index')->with('error', 'Whoop!!! this category not found.');
    }

    public function store(StoreCategory $request){
        if($request->category_id == null){
            $this->validate($request, [
                'name' => 'required|unique:categories',
            ]);
        }
        
        Category::updateOrCreate([
            'id' => $request->category_id
        ],[
            'name' => $request->name
        ]);
        return redirect()->route('category_index')->with('success', 'Category has create successfully');
    }

    public function delete($id){
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->route('category_index')->with('success', 'Category has delete successfully.');
        }
        return redirect()->route('category_index')->with('error', 'Whoop!!! this Category not found.');
    }
}
