<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductMail;
use App\Models\Category;
use App\Http\Requests\StoreProductPost;
use Carbon\Carbon;
use Validator;
use Mail;
use Storage;
use Lang;

class ProductController extends Controller
{
		public function index(){
			$products = Product::paginate(10);
			return view('admin.product.index', compact('products'));
		}

		public function create(){
			$categories = Category::all();
			return view('admin.product.create', compact('categories'));
		}

		public function edit($id){
			$product = Product::find($id);
			$categories = Category::all();
			if ($product) {
				return view('admin.product.create', compact('product', 'categories'));
			}
			return redirect()->route('product_index')->with('error', \Lang::get('sample.pro_not_found'));
		}

    public function store(StoreProductPost $request)
    {	
    	if ($request->product_id == null) {
				$this->validate($request, [
						'profile' => 'required|mimes:jpeg,jpg,png|max:1000',
				]);
    	}

			if($request->hasFile('profile')) {
					$imageName = time().'.'.$request->profile->getClientOriginalExtension();
			$request->profile->move(storage_path('app/public/products/'), $imageName);
			}

			$oldProfile = Product::find($request->product_id);
			if($oldProfile){
				$oldProfile = $oldProfile->profile;
			}else{
				$oldProfile = '';
			}
			// send store product
			$product = Product::updateOrCreate([
				'id' => $request->product_id
			],[
				'name' => $request->name,
				'price' => $request->price,
				'status' => $request->status,
				'profile' => !empty($imageName)?$imageName:$oldProfile,
				'category_id' => $request->category,	
				'description' => $request->description

			]);

			// send mail
			$when = Carbon::now();
			Mail::to('saoyati@gmail.com')
				->later($when, new ProductMail($product));

			return redirect()->route('product_index')->with('success', \Lang::get('sample.pro_create_success'));
		}
		
		public function delete($id){
			$product = Product::find($id);
			if ($product) {
				$image = $product->profile;
				$product->delete();
				if(file_exists( public_path('storage/products/'). $image)){
					Storage::disk('local')->delete('/public/products/'.$image);
				}
				return redirect()->route('product_index')->with('success', \Lang::get('sample.pro_delete_success'));
			}
			return redirect()->route('product_index')->with('error', \Lang::get('sample.pro_not_found'));
		}
}
