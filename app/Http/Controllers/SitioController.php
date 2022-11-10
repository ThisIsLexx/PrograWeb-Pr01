<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function contacto($user_id = null) {
    
        if($user_id=='1234') {
            $nombre = 'Alexis';
            $correo = 'alexis@test.com';
        }
        else{
            $nombre = null;
            $correo = null;
        }

        return view('contacto', compact('nombre', 'correo'));
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
