<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function auction(Request $request)
    {
        $id=$request['id'];
        $product=Product::find($id);
        if ($product->status==0)
        {
            return response()->json([
                'message' => 'Product is not active',
            ], 404);
        }
        $product->current_price+=$request['price'];
        $product->user_id=auth()->user()->id;
        $product->save();
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ]);
    }
}
