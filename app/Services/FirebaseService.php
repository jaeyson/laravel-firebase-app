<?php

namespace App\Services;

use Kreait\Firebase\Auth;

class FirebaseService
{
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

}