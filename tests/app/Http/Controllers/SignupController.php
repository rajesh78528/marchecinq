<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(){
        return view('account.signup');
    }
    public function login(){
        return view('account.login');
    }
    public function termsnew(){
        return view('account.termsnew');
    }
}
