<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Mail\ProductMail;
use Mail;

class ProductController extends Controller
{
    public function create(Request $request)
    {
    	 //   	$post = new Product; 
  //   	$post->name = $request->name;
		// $post->price = $request->price;
		// $post->status = $request->status;
		// $post->profile = $request->profile;
		// $post->category_id = $request->category_id;
		// $post->slug = $post->setSlugAttribute('slug', $request->name);
  //       $post->save();

  //       $when = now()->addMinutes(10);

		// Mail::to($request->user())
		//     ->later($when, new ProductMail($order));

  //       return view('');
    }
}
