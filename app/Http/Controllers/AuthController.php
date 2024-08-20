<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('Register');
    }

    public function Welcome(Request $request){
        return view('Welcome', [
            'FirstName' => $request->input('FirstName'),
            'LastName' => $request->input('LastName'),
            'Gender' => $request->input('Gender')
        ]);
    }
}
