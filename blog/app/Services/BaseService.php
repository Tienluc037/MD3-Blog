<?php

namespace App\Services;

class BaseService
{
    public function sendResponse($data, $msg, $code = 200)
    {
        $response = [
            "success"=> true,
            "data"=> $data,
            "msg"=> $msg
        ];
        return response()->json($response, $code);
    }



    public function sendError($data, $msg, $code = 404)
    {
        $response = [
            "success"=> false,
            "data"=> $data,
            "msg"=> $msg
        ];
        return response()->json($response, $code);
    }
}
