<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PropertiesController extends Controller
{
    public function index()
    {
        return view('properties.index');
    }

    public function show()
    {
        return view('properties.show');
    }
}
