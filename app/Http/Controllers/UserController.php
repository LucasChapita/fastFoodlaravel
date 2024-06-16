<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];

        $usuarios = Storage::exists('usuarios.json') ? json_decode(Storage::get('usuarios.json'), true) : [];
        $usuarios[] = $data;
        Storage::put('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));

        // Redireccionar con mensaje flash
        return redirect()->route('registro')->with('mensaje', '¡Usuario registrado exitosamente!');
    }
}
