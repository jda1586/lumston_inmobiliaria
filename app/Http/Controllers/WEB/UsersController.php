<?php

namespace App\Http\Controllers\WEB;

use App\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'user' => auth()->user(),
            'recently' => Property::limit(6)->orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
