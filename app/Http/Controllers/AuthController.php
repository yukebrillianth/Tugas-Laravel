<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }
    public function welcome_get(Request $request){
        // dd($request->all());
        $nama = $request["fname"];
        return "<h1>SELAMAT DATANG $nama !</h1>
        <h3>Terima kasih telah bergabung di Sanberbook. Social media kita bersama</h3>";
    }
    public function welcome(Request $request){
        // dd($request->all());
        $fname = $request["fname"];
        $lname = $request["lname"];
        return "<h1>Selamat Datang $fname $lname !</h1>
        <h3>Terima kasih telah bergabung di Sanberbook. Social media kita bersama</h3>";
    }
}
