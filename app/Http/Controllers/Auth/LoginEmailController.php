<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;

class LoginEmailController extends Controller
{
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //email address
        //password
    }

    public function store(Request $request)
    {

    }
}

