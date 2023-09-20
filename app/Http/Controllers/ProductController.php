<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getProduct(Request $request){
        try {
            $product = Product::with('category','supplier');
         
            if ($request->has('categories'))    
                $product->whereRelation('category', fn($q) => $q->whereIn('categoryName',$request->categories));
            
            if ($request->has('suppliers')) 
                $product->whereRelation('supplier', fn($q) => $q->whereIn('companyName',$request->suppliers));
            
            return $product->paginate(10);
        } catch (\Throwable $th) {
            return response()->json(['res'=>false,'msg'=>"Internal server error"], 500);
        }
        
    }
}
