<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DeployController
{

    public function start(Request $request)
    {


        return response()->json(
            json_decode($request->all()['payload'])->ref,
            200
        );
    }

}
