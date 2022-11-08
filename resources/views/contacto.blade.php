<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/form_cont.css')}}" />
</head>

<body>

<div class="overlay">
    <section class="form_contact">
        <h1 class="center">Contactanos!</h1>
        <form class="contacto" action="/recibe-form-contacto" method="POST">
            
            @csrf
            @if(empty($usuario))
                {{ $usuario[0] = ""; }}
                {{ $usuario[1] = ""; }}
            @endif

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value= "{{ $usuario[0]? $usuario[0] : old('nombre') }}" placeholder="Tu nombre">
            @error('nombre')
                <p>Porfavor ingrese un nombre!</p>
            @enderror

            <label for="correo">Correo electronico:</label>
            <input type="email" name="correo"  id="correo" value = "{{ $usuario[1]? $usuario[1] : old('correo') }}" placeholder="Tu correo electronico">
            @error('correo')
                <p>Ingrese una dirección de correo valida!</p>
            @enderror

            <label for="comentario">Comentarios</label>
            <textarea name="comentario" id="comentario" placeholder="Como podemos ayudar?"></textarea>
            @error('comentario')
                <p>Porfavor escriba un comentario</p>
            @enderror

            <div class="center">
                <input class="shadow" required type="submit">
            </div>
        </form>
    </section>
</div>

</body>

</html>