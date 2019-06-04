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
			return redirect('product/index');
		}

    public function store(StoreProductPost $request)
    {	
    	if ($request->product_id == null) {
    		$request->validate([
			    'profile' => 'required'
			]);
    	}

		if($request->hasFile('profile')) {
				$imageName = time().'.'.$request->profile->getClientOriginalExtension();
		$request->profile->move(storage_path('app/public/products/'), $imageName);
		}

		$oldProfile = Product::find($request->product_id);

		// send store product
		$product = Product::updateOrCreate([
			'id' => $request->product_id
		],[
			'name' => $request->name,
			'price' => $request->price,
			'status' => $request->status,
			'profile' => !empty($imageName)?$imageName:!empty($oldProfile)?$oldProfile->profile:'',
			'category_id' => $request->category,	
			'description' => $request->description

		]);

		// send mail
		$when = Carbon::now()->addsecond(5);
		Mail::to('saoyati@gmail.com')
			->later($when, new ProductMail($product));

		// return view('mail.product_mail', compact('product'));
		// return redirect()->back()->with("success", "Access granted");

    }
}
