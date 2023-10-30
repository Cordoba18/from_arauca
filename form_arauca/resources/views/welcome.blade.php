<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/imgs/logo.jpeg') }}" type="image/x-icon">
    <title>Formulario de arauca</title>
    @vite(['resources/css/form.css'])
</head>
<body style="background-image: url({{ asset('storage/imgs/FONDO.png') }})">

    <div class="container_form" >
        <div class="container_form_img">
        <img src="{{ asset('storage/imgs/TEXTO.png') }}" alt="">
    </div>
        <form id="form" action="{{ route('home.save_participant') }}" method="POST">
            @csrf
            <label >Nombre</label>
            <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" required>
            <label >Nit</label>
            <input type="number" name="nit" id="nit" placeholder="Ingresa tu nit" required>
            <label >Ciudad</label>
            <select name="city" id="city" required>
                <option value="">Seleccione una ciudad</option>
                @foreach ($citys as $c)
                <option value="{{ $c->id }}">{{ $c->city }}</option>
                @endforeach
            </select>
            <label >Dirección y barrio</label>
            <input type="text" name="address" id="address" placeholder="Ingresa tu dirección" required>
            <label >Télefono</label>
            <input type="number" name="phone" id="phone" placeholder="Ingresa tu télefono" required>
            <div class="container_tyc">
            <input type="checkbox" id="myCheckbox" name="check_tyc" required>
            <label>Aceptar terminos y condiciones</label>
        </div>
            <p class="message_error"></p>
            <div class="container_form_button">
            <button id="btn_register">REGISTRARSE</button>
        </div>
        </form>
    </div>

   @vite(['resources/js/home.js'])
</body>
</html>
