<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use Validator;
use Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(10);
        return CategoryResource::collection($category)
                                ->additional(['status' => 200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $validation = Validator::make($request->all(),[ 
            'name' => 'required|unique:categories',
        ]);
    
        if($validation->fails()){
            $errors = $validation->errors();
            return response()->json(['erors' => $errors, 'status' => 400]);  
        }else{
            $category = Category::create([
                'name' => $request->name
            ]);
            return (new CategoryResource($category))->additional(['status' => 200]);
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if($category){
            return (new CategoryResource($category))->additional(['status' => 200]);
        }else{
            return response()->json(['erors' => 'Category not found!!!', 'status' => 404]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validation = Validator::make($request->all(),[ 
            'name' => 'required',
        ]);
        
        if($validation->fails()){
            $errors = $validation->errors();
            return response()->json(['erors' => $errors, 'status' => 400]);  
        }else{
            $category = Category::find($id);
            if($category){
                $category->update([
                    'name' => $request->name
                ]);
                return (new CategoryResource($category))->additional([
                    'status' => 200,
                    'massage' => 'Category has update succesfully!!!'
                    ]);
            }else{
                return response()->json(['erors' => 'Category not found!!!', 'status' => 404]);
            }
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
        if($category){
            $category->delete();
            return (new CategoryResource($category))
                    ->additional([
                        'status' => 200,
                        'massage' => 'Category has delete succesfully!!!'
                        ]);
            // return response()->json(['sucess' => 'Category has delete sucessfully.', 'status' => 200]);
        }else{
            return response()->json(['erors' => 'Category not found!!!', 'status' => 404]);
        }
    }
}
