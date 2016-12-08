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
        $user = auth()->user();
        return view('users.index', [
            'user' => $user,
            'recently' => Property::where(function ($q) {
                $q->where('operation', 'for_rent')
                    ->orWhere('operation', 'for_sale');
            })->where('status', 'active')->orderBy('created_at', 'desc')->limit(6)->get(),
            'favorites' => $user->favorites()->count(),
            'view' => '',
        ]);
    }
}
