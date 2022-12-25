<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        return view('auth.login');
    }

    public function store(){

        dd('ok');
    }
}
