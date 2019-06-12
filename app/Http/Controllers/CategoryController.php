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
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
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
        $this->validate($request, [
            'category_id' => 'nullable|numeric',
        ]);

        if($request->category_id == null ){
            $this->validate($request, [
                'name' => 'required|unique:categories|min:5',
            ]);

            Category::create([
                'name' => $request->name
            ]);
            return redirect()->route('category_index')->with('success', \Lang::get('sample.cat_create_success'));
        }else{
            $find_category = Category::find($request->category_id);
            if($find_category){
                $category = Category::where('name', $request->name)
                                ->first();
                if($category){
                    if($category->id == $request->category_id){
                        $find_category->update([
                            'name' => $request->name
                        ]);
                        return redirect()->route('category_index')->with('success', \Lang::get('sample.cat_create_success'));
                    }else{
                        return redirect()->route('category_index')->with('error', \Lang::get('sample.already_exist'));
                    }          
                }else{
                    $find_category->update([
                        'name' => $request->name
                    ]);
                    return redirect()->route('category_index')->with('success', \Lang::get('sample.cat_create_success'));
                }
            }else{
                return redirect()->route('category_index')->with('error', \Lang::get('sample.cat_not_found'));
            }
        }
        
        
        
        dd($category);

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
        if(strlen($request->name) > 25 || strlen($request->name) < 5){
            $message = 2;
            return Response::json(['message' => $message, 'data' => null]);
        }else{
            $find = Category::where('name',$request->name)->first();
            if ($find) {
                $message = 0;
                return Response::json(['message' => $message, 'data' => null]);
            }else{
                $data = Category::create([
                    'name' => $request->name
                ]);
                $message = 1;
                return Response::json(['message' => $message, 'data' => $data]);
            }
        }        
    }
}
