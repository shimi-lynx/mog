<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloLaravelController extends Controller
{
    public function index()
    {
        $response = [
            'message' => 'Hello Laravel!!',
        ];

        return response()->json($response);
    }
}
