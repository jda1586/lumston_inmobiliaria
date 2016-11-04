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
        return view('auth.index', [
            'properties' => Property::whereStatus('for_sale')->orWhere('status', 'for_rent')->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
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
            return redirect()->route('properties.index');
        } else {
            return redirect()->route('auth.index')->with('error', trans('auth.failed'));
        }
    }

    public function register()
    {
        return view('auth.register', [
            'properties' => Property::whereStatus('for_sale')->orWhere('status', 'for_rent')->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
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
            'first_name' => Input::get('firstName'),
            'last_name' => Input::get('lastName'),
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password')),
            'rol_id' => 1,
            'city_id' => 0,
            'state_id' => 0,
            'country_id' => 'MEX',
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
