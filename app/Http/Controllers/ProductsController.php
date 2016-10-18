<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\ProductRequest;

use App\Product;

use Request;

class ProductsController extends Controller
{
    //
	public function index(){
		
		$products = Product::latest()->get();

		
		return view('products.index', compact('products'));
	}

	public function show($id){
		
		
		$product = Product::findOrFail($id);
		
		
		return view('products.show', compact('product'));
	}

	public function destroy($id){

		$product = Product::find($id);

		if($product){
			$product->delete();		
		}		
		
		return redirect('products');
	}

	public function edit($id){

		$product = Product::findOrFail($id);

		return view('products.edit', compact('product'));
	}

	public function update($id, ProductRequest $request){

		$product = Product::findOrFail($id);

		$file = $request->file('product_picture');

		$destination = '/var/www/invigortest/public/uploads';
		$file->move($destination, $file->getClientOriginalName());

		$res = $request->all();
		$res['product_picture'] = $file->getClientOriginalName();

		$product->update($res);


		return redirect('products');
	}


	public function create(){
	
	
		return view('products.create');
	}

	public function store(ProductRequest $request){

		$file = $request->file('product_picture');

		$destination = '/var/www/invigortest/public/uploads';
		$file->move($destination, $file->getClientOriginalName());

		$res = $request->all();
		$res['product_picture'] = $file->getClientOriginalName();
		
	
		Product::create($res);
		return redirect('products');
	}

}
