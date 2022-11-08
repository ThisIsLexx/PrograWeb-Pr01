<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function recibeFormContacto(Request $request) {
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => 'required|email',
            'comentario' => 'required|max:255',
        ]);
        
        DB::insert('insert into contactos (nombre, correo, comentario) values (?,?,?)',[$request->nombre, $request->correo, $request->comentario]);
        return redirect('contacto');
    
    }

    public function landingpage() {
        return view('landingpage');
    }
}
