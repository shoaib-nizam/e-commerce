<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register(Request $req){

             Register::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->pass,
        ]);

    }


    }

