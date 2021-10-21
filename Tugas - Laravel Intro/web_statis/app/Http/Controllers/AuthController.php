<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        $nama_depan = $request['firstName'];
        $nama_belakang = $request['lastName'];
        return view('welcome', compact('nama_depan','nama_belakang'));
    }
}
