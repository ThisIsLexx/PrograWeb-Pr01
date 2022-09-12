<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{user_id?}', function ($user_id = null) {
    
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
});

Route::get('/landingpage', function () {
    return view('landingpage');
});