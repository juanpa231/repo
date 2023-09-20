<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function update(CustomerStoreRequest $request,$custId){
        try {
            // Customer::where('custId', $custId)->update($request->all());
            if (!is_numeric($custId)) 
                return response()->json(['res'=>false,'msg'=>"The id entered is not valid"], 422);
            $customer=Customer::where('custId', $custId);

            if (!$customer->exists()) 
                return response()->json(['res'=>false,'msg'=>"Customer not found"], 404);

            $customer->update($request->only(
                ['companyName', 'contactName', 'contactTitle', 'address',
                'city','region', 'postalCode', 'country', 'phone', 'mobile', 'email', 'fax'
                ]));

            return response()->json(['res'=>true,'msg'=>"successfully edited product"], 200);
        } catch (\Throwable $th) {
            return response()->json(['res'=>false,'msg'=>"Internal server error"], 500);
        }
        

    }
}
