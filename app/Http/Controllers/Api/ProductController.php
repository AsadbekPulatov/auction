<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('index', 'show');
        $this->middleware('admin')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'product' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json([
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        if ($request->start_price != null){
            $product->start_price = $request->start_price;
            $product->current_price = $request->start_price;
        }
        if ($request->end_date != null)
        $product->end_date = $request->end_date;
        $product->save();
        return response()->json([
            'message' => 'Product updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
        ]);
    }
}
