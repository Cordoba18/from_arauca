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
            <label >Cedula</label>
            <input type="number" name="nit" id="nit" placeholder="Ingresa tu Cedula" required>
            <label>Ciudad</label>
            <select name="city" id="city" required>

                @foreach ($citys as $c)
                <option value="{{ $c->id }}">{{ $c->city }}</option>
                @endforeach
            </select>
            <label>Barrio/vereda</label>
            <select name="neighborhood" id="neighborhood" required>
                <option value="">Seleccione un barrio o vereda</option>
                @foreach ($neighborhoods as $n)
                <option value="{{ $n->id }}">{{ $n->neighborhood }}</option>
                @endforeach
            </select>
            <label >Télefono</label>
            <input type="number" name="phone" id="phone" placeholder="Ingresa tu télefono" required>
            <div class="container_tyc">
            <input type="checkbox" id="myCheckbox" name="check_tyc" required>
           <a href="{{ route('home.terminos_condiciones') }}" target="_blank"><label>Aceptar terminos y condiciones</label></a>
        </div>
            <p class="message_error"></p>
            <div class="container_form_button">
            <button id="btn_register">REGISTRARSE</button>
        </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   @vite(['resources/js/home.js'])
</body>
</html>
