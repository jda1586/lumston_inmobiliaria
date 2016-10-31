<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login()
    {
        $validator = \Validator::make(Input::all(), [
            'email' => 'required|email',
            'password' => 'required',
            'keep' => 'boolean',
        ]);

        if ($validator->fails())
            return redirect()->route('auth.index')->withInput(Input::all())->withErrors($validator);

        if (auth()->attempt([
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ], Input::get('keep'))
        ) {
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create()
    {
        $validator = Validator::make(Input::all(), [

        ]);

        if ($validator->fails())
            return redirect()->route('auth.register')->withInput(Input::all())->withErrors($validator);


    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('welcome.index');
    }
}
