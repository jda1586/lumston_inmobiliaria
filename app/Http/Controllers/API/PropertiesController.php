<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
    public function search()
    {
        return response()->json(['test' => true]);
    }
}
