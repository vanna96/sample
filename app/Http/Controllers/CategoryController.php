<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategory;
use Illuminate\Support\Facades\Input;
use Response;
use Lang;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory  $request)
    {
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('category.index')->with('success', \Lang::get('sample.cat_create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('admin.category.edit', compact('category'));
        }else{
            return redirect()->route('category.index')->with('error', \Lang::get('sample.cat_not_found'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $find_category = Category::find($id);
        if($find_category){
            $category = Category::where('name', $request->name)->first();
            if($category){
                if($category->id == $id){
                    $find_category->update([
                        'name' => $request->name
                    ]);
                    return redirect()->route('category.index')
                            ->with('success', \Lang::get('sample.cat_update_success'));
                }else{
                    return redirect()->back()
                            ->with('error', \Lang::get('sample.already_exist'))
                            ->withInput(Input::all());
                }          
            }else{
                $find_category->update([
                    'name' => $request->name
                ]);
                return redirect()->route('category.index')->with('success', \Lang::get('sample.cat_update_success'));
            }
        }else{
            return redirect()->route('category.edit', $id)->with('error', \Lang::get('sample.cat_not_found'));
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->route('category.index')->with('success', \Lang::get('sample.cat_delete_success'));
        }
        return redirect()->route('category.index')->with('error', \Lang::get('sample.cat_not_found'));
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
