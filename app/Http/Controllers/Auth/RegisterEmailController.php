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
        // $user = $this->auth->getUser('Oc0GDbe3BbVhdyQXBGKFJFNj0742');
        // dd($user); //returns UserRecord
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $password = $request->get('password');
        $email = $request->get('email');

        $this->auth->createUserWithEmailAndPassword($email, $password);

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

