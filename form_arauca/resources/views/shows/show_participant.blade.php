<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Participante</title>
    @vite(['resources/css/show.css'])
</head>

<body style="background-image: url({{ asset('storage/imgs/FONDO.png') }})">

    <div class="container_show">

        <div class="container_form_info_particapant">
            <div class="container_form_img">
                <img src="{{ asset('storage/imgs/CONFIRMACION_REGISTRO.png') }}" alt="">
            </div>
            <div class="container_form_into">
                <h1>{{ $participant->name }}</h1>
                <p> {{ $participant->nit }}</p>
            </div>
        </div>
    </div>

</body>

</html>
