<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
//        dd(1);
        $products=Product::all();
 return view('product.index',compact('products'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $products=new Product();
        $products->name=$request->name;
        $products->description=$request->description;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('products/', $filename);
            $products->image = $filename;
        }
        $products->start_price=$request->start_price;

        $products->current_price=$request->current_price;
        $products->end_date=$request->end_date;
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=Product::find($id);
//        dd($products);
        return view('product.edit',compact('products'));
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
        $request->validate([
'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'start_price'=>'required',
            'current_price'=>'required',
            'end_date'=>'required',
        ]);
$products=Product::find($id);
$products->name=$request->name;
$products->description=$request->description;

if($request->hasFile('image')) {
    $img=public_path('products/').$products->image;
    if(\Illuminate\Support\Facades\File::exists($img)){
        File::delete($img);
    }
    $file = $request->file('image');
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '.' . $extension;
    $file->move('products/', $filename);
    $products->image = $filename;
}
$products->start_price=$request->start_price;

$products->current_price=$request->current_price;

$products->end_date=$request->end_date;

$products->save();
return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        $products=Product::find($id);
        $products->delete();
        return redirect()->route('product.index');
    }
}
