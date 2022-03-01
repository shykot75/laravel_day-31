<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $products;

    public function index()
    {
        return view('product.add');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect()->back()->with('message', 'Product information saved successfully!');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('product.manage-product', ['products'=>$this->products]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit-product',['product' => $this->product]);
    }

    public static function update(Request $request, $id)
    {

        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product info updated successfully');

    }

    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product info deleted successfully');
    }

}
