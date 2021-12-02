<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ok($data, $message = "ok")
    {
        return [
            'code' => 0,
            'message' => $message,
            'data' => $data
        ];
    }

    public function fail($code, $message)
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => []
        ];
    }
}
