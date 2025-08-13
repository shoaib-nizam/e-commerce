<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register(Request $req){

        // return $req;
        $reg = new Register;
         $reg->name = $req->name;
        $reg->email = $req->email;
        $reg->password = Hash::make($req->pass); // password encrypt
        $reg->save();
        return redirect()->route('login');

    }


    }

