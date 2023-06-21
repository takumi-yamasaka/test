<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth::index');
    }
}