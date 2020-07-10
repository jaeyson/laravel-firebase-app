<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Kreait\Firebase\Auth;

class RegisterEmailController extends Controller
{
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
        // $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $password = $request->get('password');

        $userProperties = [
            'email' => $request->get('email'),
            'password' => Hash::make($password),
            'emailVerified' => false,
            'phoneNumber' => null,
            'photoUrl' => null,
            'displayName' => null,
            'disabled' => false,
        ];

        $user = $this->auth->createUser($userProperties);
        dd($user);
        //firstname
        //lastname
        //displayname = firstname.lastname lowercase
        //email_address
        //password
    }

    public function store(Request $request)
    {

    }
}

