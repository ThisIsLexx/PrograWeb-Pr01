<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_landingpage()
    {
        $response = $this->get('/landingpage');

        $response->assertStatus(200);
    }

    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        $response->assertSeeText(['Nombre','Correo','Comentario']);
    }

    /** @test */
    public function validacion_Formulario(){
        
        $response = $this->post('/recibe-form-contacto', [
            'nombre' => '',
            'correo' => '',
            'comentario' => '',
        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'correo',
            'comentario',
        ]);
    }

    /** @test */
    public function pre_rellenado_contacto()
    {
        $response = $this->get('/contacto/1234');

        $response->assertStatus(200);

        $this->assertEquals('Alexis', $response['nombre']);
        $this->assertEquals('alexis@test.com', $response['correo']);

    }
}
