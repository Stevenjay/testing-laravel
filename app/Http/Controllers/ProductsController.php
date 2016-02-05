<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

class ProductsController extends Controller
{
	//In charge of showing the default products page 
    public function index() {

    	$products = \App\Product::all();

    	$popularProducts = [];

    	return view('products', compact('products', 'popularProducts'));

    }

    public function create() {

    	return view('products.create');

    }

    public function store( Request $request ) {
    	
    	//Validation 
    	$this->validate($request, [

    			'name'            =>'required|min:2|max:10',
    			'description'     => 'required|between:20,1000',
    			'price'           => 'required|numeric|between:1,9999.99',
    			'stock'           => 'required|integer|min:0|max:65'

    		]);

    	//Create a new product
    	$newProduct = new Product( $request->all() );

    	//Populate product with form data
    	// $newProduct->name 			= $request->name;
    	// $newProduct->description 	= $request->description;
    	// $newProduct->price 			= $request->price;
    	// $newProduct->stock 			= $request->stock;

    	$newProduct->save();

    	return redirect('products');

    	//return $request->all();
    }

    public function show($id) {

    	//Find the product with that id
    	$product = Product::findOrFail($id);
    	
    	return view('products.show', compact('product'));

    }

    public function edit($id) {
    	//Get the info about the product
    	$product = Product::findOrFail($id);

    	return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {

    	$this->validate($request, [
    			'name' => 'required|min:2'
    		]);

    	//Find the product we are editing 
    	$product = Product::findOrFail($id);

    	$product->name = $request->name;

    	$product->save();

    	return redirect('products/'.$id);

    }
}















