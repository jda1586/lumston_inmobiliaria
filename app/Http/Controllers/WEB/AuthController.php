<?php

namespace App\Http\Controllers\WEB;

use App\User;
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
            'email' => 'required|email|exists:users',
            'password' => 'required',
            'keep' => 'boolean',
        ]);

        if ($validator->fails())
            return redirect()->route('auth.index')->withInput(Input::all())->withErrors($validator);

        if (auth()->attempt([
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'status' => 'active',
        ], Input::get('keep'))
        ) {
            return redirect()->back();
        } else {
            return redirect()->route('auth.index')->with('error', trans('auth.failed'));
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create()
    {
        $validator = Validator::make(Input::all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        if ($validator->fails())
            return redirect()->route('auth.register')->withInput(Input::all())->withErrors($validator);

        $new_user = new User([
            'name' => Input::get('firstName'),
            'email' => Input::get('lastName'),
            'password' => bcrypt(Input::get('password')),
            'rol_id' => 1,
            'city_id' => 0,
            'state_id' => 0,
            'country_id' => 'MX',
            'status' => 'active'
        ]);
        if ($new_user->save()) {
            auth()->login($new_user);
            return redirect()->route('properties.index');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('welcome.index');
    }
}
