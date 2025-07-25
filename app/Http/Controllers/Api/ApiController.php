<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customerRequest;

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

    public function postData(Request $req)
    {
        $req->validate([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'required',
            'date'=>'required',
            'time'=>'required',
            'seats'=>'required',
            'anyRequest'=>'required|max:355',
        ]);

        $data=customerRequest::create([
            'firstName'=>$req->firstName,
            'lastName'=>$req->lastName,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'date'=>$req->date,
            'time'=>$req->time,
            'seats'=>$req->seats,
            'anyRequest'=>$req->anyRequest,
        ]);

        if($data)
        {
            return response()->json([
                'status'=>true,
                'message'=>'successfully created',
                'data'=>$data,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>false,
                'message'=>'user does not created',
                'data'=>null,
            ]);
        }
    }
}
