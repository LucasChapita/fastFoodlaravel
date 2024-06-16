<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        return view('index');
    }

    public function registrarse(){
        return view('pages.registro');
    }
    public function login()
    {
        return view('pages.login');
    }
    public function index()
    {
        return view('index');
    }
    public function volver(){
        return view('index');
    }
}
