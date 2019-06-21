<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductPost;
use App\Http\Requests\UpdateProductPost;
use App\Mail\ProductMail;
use Carbon\Carbon;
use Validator;
use Mail;
use Storage;
use Lang;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        $base64_image = $request->b64;
        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            $imageName = $this->StoreImage($base64_image);
        }

        $product = Product::create([
			'name' => $request->name,
			'price' => $request->price,
			'status' => $request->status,
			'profile' => !empty($imageName)?$imageName:' ',
			'category_id' => $request->category,	
			'description' => $request->description
        ]);

        // send mail
        $when = Carbon::now();
        Mail::to('saoyati@gmail.com')
            ->later($when, new ProductMail($product));

        return redirect()->route('product.index')->with('success', \Lang::get('sample.pro_create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if($product){
            return view('admin.product.show', compact('product'));
        }
        return redirect()->route('product.index')->with('error', \Lang::get('sample.pro_not_found'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        if ($product) {
            return view('admin.product.edit', compact('product', 'categories'));
        }
        return redirect()->route('product.index')->with('error', \Lang::get('sample.pro_not_found'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPost $request, $id)
    {
        $find_product = Product::find($id);
        if($find_product){
            $base64_image = $request->b64;
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $imageName = $this->StoreImage($base64_image);
            }
            $oldProfile = $find_product->profile;
            $find_product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'profile' => !empty($imageName) ? $imageName:$oldProfile,
                'category_id' => $request->category,	
                'description' => $request->description
            ]);

            // delete old file
            if(@$imageName){
                $this->DeleteImage($oldProfile);		
            }           
            return redirect()->route('product.index')->with('success', \Lang::get('sample.pro_update_success'));

        }else{
            return redirect()->route('product.edit', $id)->with('error', \Lang::get('sample.pro_not_found'));
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
        $product = Product::find($id);
		if ($product) {
			$image = $product->profile;
			$product->delete();
			$this->DeleteImage($image);
			return redirect()->route('product.index')->with('success', \Lang::get('sample.pro_delete_success'));
		}
		return redirect()->route('product.index')->with('error', \Lang::get('sample.pro_not_found'));
    }

    private function StoreImage($base64_image){
        $imageName = time().'.png';
        $data = substr($base64_image, strpos($base64_image, ',') + 1);
        $data = base64_decode($data);
        Storage::disk('product')->put($imageName, $data);
        return $imageName;
    }

    private function DeleteImage($image){
        if(file_exists( public_path('storage/products/'). $image)){
            Storage::disk('product')->delete($image);
        }
    }
}
