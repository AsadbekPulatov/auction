<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_price' => 'required',
            'end_date' => 'required',
            'image' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $product = new Product();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->start_price = $request->start_price;
        $product->current_price = $request->start_price;
        $product->end_date = $request->end_date;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("auction.show", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
//        dd($products);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product->user_id > 0) {
            return response()->json([
                'message' => 'You can not update this product',
            ], 403);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalName();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $name);
            $product->image = $name;
        }
        if ($request->name != null)
            $product->name = $request->name;
        if ($request->description != null)
            $product->description = $request->description;
        if ($request->start_price != null) {
            $product->start_price = $request->start_price;
            $product->current_price = $request->start_price;
        }
        if ($request->end_date != null)
            $product->end_date = $request->end_date;
        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('product.index');
    }

    public function auction(Request $request, $id)
    {
        $product=Product::find($id);
        if ($product->status == 0){
            return redirect()->route('auctions.index');
        }
        $product->current_price+=$request['price'];
        $product->user_id=Auth::user()->id;
        $product->save();
        return redirect()->back();
    }
}
