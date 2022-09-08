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
    
    if(!empty($user_id)) {
        $usuario = $usuarios[$user_id];
    }
    else {
        $usuario = null;
    }

    return view('contacto');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});