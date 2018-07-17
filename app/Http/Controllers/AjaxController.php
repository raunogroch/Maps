<?php

namespace App\Http\Controllers;

use App\Dot;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function save_dot(Request $request){
          if ($request->ajax()){
                Dot::create($request->all());
          }else{
              return response()->json(
                  [
                      'status'=>false,
                      'message' => 'error'
                  ]);
          }
    }
}
