<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;

class AuctionController extends Controller
{
    public function addauction(Request $request,$id){

        $product=Product::find($id);
//
        $product->current_price+=$request['price'];
        $product->user_id=auth()->user()->id;
        $product->save();
        //crfefrdgfbngtfnb gfnhfgt
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ]);
    }
}
