<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductMail;
use App\Models\Category;
use Mail;
use Validator;
use App\Http\Requests\StoreProductPost;
use Carbon\Carbon;

class ProductController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
		}
		
		public function index(){
			$products = Product::paginate(10);
			return view('admin.product.index', compact('products'));
		}

		public function create(){
			$categories = Category::all();
			return view('admin.product.create', compact('categories'));
		}
    public function store(StoreProductPost $request)
    {		
			if($request->hasFile('profile')) {
					$imageName = time().'.'.$request->profile->getClientOriginalExtension();
			$request->profile->move(storage_path('app/public/products/'), $imageName);
			}

			// send store product
			$product = new Product;
			$product->name = $request->name;
      $product->price = $request->price;
			$product->status = $request->status;
			$product->profile = !empty($imageName)?$imageName:'';
			$product->category_id = $request->category;	
			$product->description = $request->description;
			$product->save();

			// send mail
			$when = Carbon::now()->addsecond(5);
			Mail::to('saoyati@gmail.com')
				->later($when, new ProductMail($product));

			// return view('mail.product_mail', compact('product'));
			// return redirect()->back()->with("success", "Access granted");

    }
}
