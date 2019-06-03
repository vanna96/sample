<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductMail;
use Mail;
use Validator;
use App\Http\Requests\StoreProductPost;

class ProductController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
		}
		
		public function create(){
			return view('admin.product.create');
		}
    public function store(StoreProductPost $request)
    {
			// send store product
			$product = new Product;
			$product->name = $request->name;
      $product->price = $request->price;
			$product->status = $request->status;
			$product->profile = 'sdfsdf';
			$product->category_id = 1;			
			$product->save();

			// send mail
			// $when = now()->addMinutes(10);
			// Mail::to($request->user())
			// 	->later($when, new ProductMail($product));
				
			return redirect()->back()->with("success", "Access granted");

    }
}
