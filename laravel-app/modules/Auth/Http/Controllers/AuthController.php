<?php

namespace Modules\Auth\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(Request $request)
    {
        // Validation logic...
        
        $user = $this->authService->register($request->all());

        // Redirect, flash message, etc...
    }

    public function login(Request $request)
    {
        // Validation logic...
        
        if ($this->authService->login($request->email, $request->password)) {
            // Redirect, set session, etc...
        } else {
            return back()->withErrors(['email' => 'Incorrect email or password']);
        }
    }
}