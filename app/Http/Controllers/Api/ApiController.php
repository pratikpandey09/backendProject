<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ApiController extends Controller
{
    public function productDetail(Request $req)
    {
        $data = product::all();
        if($data)
        {
            return response()->json([
                'status'=>true,
                'message'=>'data fetched successfully',
                'data'=>$data
            ]);
        }
        else
        {
            return response()->json([
                'status'=>false,
                'message'=>'data does not fetched',
                'data'=> null
            ]);
        }
    }
    
}
