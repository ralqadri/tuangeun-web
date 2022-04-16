<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ResponseController extends Controller
{
    public function getStatus($code) {
        switch ($code) {
            case 200:
                return 'OK';
            case 400:
                return 'Bad Request';
            case 404:
                return 'Not Found';
            case 500:
                return 'Internal Server Error';
        }
    }

    public function hasData($data) {
        if (!empty($data)) {
            return "True";
        } else {
            return "False";
        }
    }

    public function toResponse($data, $code, $msg = '') {
        return response()->json([
            'code' => $code,
            'status' => $this->getStatus($code),
            'data' => $data,
            'response' => $this->hasData($data),
            'message' => $msg
        ]);
    }
}
