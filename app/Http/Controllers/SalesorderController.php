<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orderdetail;
use App\Models\Salesorder;
use Illuminate\Http\Request;

class SalesorderController extends Controller
{
    //
    public function getOrderByCustId($custId){
        try {
            if (!is_numeric($custId)) 
                return response()->json(['res'=>false,'msg'=>"The id entered is not valid"], 422);
            $product = Orderdetail::with('salesorder')->whereRelation('salesorder','custId',$custId)->paginate(10);
            return $product;
        } catch (\Throwable $th) {
            return response()->json(['res'=>false,'msg'=>"Internal server error"], 500);
        }
        
    }

}
