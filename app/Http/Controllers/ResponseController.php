<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function toResponse($data, $code, $error = '') {
        return response()->json([
            'code' => $code,
            'status' => $this->getStatus($code),
            'data' => $data,
            'error' => $error
        ]);
    }
}
