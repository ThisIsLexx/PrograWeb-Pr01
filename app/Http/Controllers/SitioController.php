<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($user_id = null) {
        $usuarios = [
            ['admin', 'admin@test.com'],
            ['Alexis', 'alexis@test.com'],
            ['Samuel','samuel@test.com'],
            ['Juan','juan@test.com'],
        ];
        if(!empty($user_id)) {
            if($user_id > sizeof($usuarios)-1){
                $usuario = null;
                $user_id = null;
            }
            else {
                $usuario = $usuarios[$user_id];
            }
        }
        else {
            $usuario = null;
        }
        return view('contacto', compact('usuarios', 'usuario'));
    }

    public function landingpage() {
        return view('landingpage');
    }
}
