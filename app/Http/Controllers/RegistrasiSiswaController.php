<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiSiswaController extends Controller
{
    public function regis(){
        return view("registrasi");
    }

    public function store (Request $req){
        return $req -> all();
    }
}
