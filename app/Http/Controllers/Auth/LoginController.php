<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'cars'; // Update this to the desired redirect path after login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
