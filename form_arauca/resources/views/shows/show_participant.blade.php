<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/imgs/logo.jpeg') }}" type="image/x-icon">
    <title>Participante inscrito</title>
    @vite(['resources/css/show.css'])
</head>

<body

style="background-image: url({{ asset('storage/imgs/FONDO.png') }})">
@if ($participant)


<div class="container_confeti">
    <img src="{{ asset('storage/imgs/confeti.gif')}}" alt="">
</div>
@endif
    <div class="container_show">

        <div class="container_form_info_particapant">
            <div class="container_form_img">
                @if (!$participant)
                @else
                <img src="{{ asset('storage/imgs/CONFIRMACION_REGISTRO.png') }}" alt="">
                @endif

            </div>
            <div class="container_form_into">
                @if (!$participant)
                <h1>No eres un partipante</h1>
                @else
                <h1>{{ $participant->name }}</h1>
                <p> NIT {{ $participant->nit }}</p>
                @endif

            </div>
        </div>
    </div>


</body>

</html>
