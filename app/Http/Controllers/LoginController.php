<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function auth(Request $request)
    {
        dd($request);
    }
}
