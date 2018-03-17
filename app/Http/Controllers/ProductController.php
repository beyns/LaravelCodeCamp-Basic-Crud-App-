<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){

//        $product = Product::WHERE('quantity', '50')->get();
//                   "SELECT * FROM product WHERE 'quantity = '50'; 

//       $product = "SELECT * FROM product"; 
        $product = Product::all();
        return view('product.index', compact('product'));
        
    }

    public function store(Request $request){

        $productName = $request->get('product_name');
        $quantity = $request->get('quantity');
        $description = $request->get('description');
        
        $product = new Product();
        $product->product_name = $productName;
        $product->quantity =$quantity;
        $product->description = $description;
        $product->save();
        
        return redirect()->back();
        
    }

    public function delete($id){

        $product = Product::find($id);
        $product-> delete();
        
        return redirect()->back();
        
    }

    public function edit($id){

        $product = Product::find($id);
        return view('product.edit',compact('product'));
        
    }

    public function update( Request $request){

        $productId = $request->get('id');
     
        //$productId = "SELECT * FROM product WHERE id = $productId
        $product = Product::WHERE ('id',$productId);
        $product->update([
        'product_name' => $request->get('product_name'),
        'quantity' => $request->get('quantity'),
        'description' => $request->get('description'),
        ]);
        return redirect('/products');
    }

    
}
