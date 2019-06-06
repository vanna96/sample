<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategory;
use Response;
use Lang;

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
        return redirect()->route('category_index')->with('error', \Lang::get('sample.cat_not_found'));
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
        return redirect()->route('category_index')->with('success', \Lang::get('sample.cat_create_success'));
    }

    public function delete($id){
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->route('category_index')->with('success', \Lang::get('sample.cat_delete_success'));
        }
        return redirect()->route('category_index')->with('error', \Lang::get('sample.cat_not_found'));
    }

    public function ajax(Request $request){
        $find = Category::where('name',$request->name)->first();
        if ($find) {
            $message = 0;
            return Response::json($message);
        }else{
            $data = Category::create([
                'name' => $request->name
            ]);
            $message = 1;
            return Response::json(['message' => $message, 'data' => $data]);
        }
        
    }
}
