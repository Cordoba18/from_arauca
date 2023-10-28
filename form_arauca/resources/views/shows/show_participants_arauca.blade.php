<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Participante</title>
    @vite(['resources/css/participants.css'])
</head>

<body style="background-image: url({{ asset('storage/imgs/FONDO.png') }})">

    <div class="container">

        <div class="container_code">

            <h1>INGRESE EL CODIGO DE VALIDACIÓN</h1>
            <input type="number" placeholder="Ingrese el codigo" id="code_validation">
            <button id="btn_validar">VALIDAR</button>
        </div>

        <div class="container_participants" hidden>

            <h1>PARTICIPANTES</h1>

            <div class="table_participants">
                <table class="table table-dark">
                    <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>NIT</th>
                        <th>TÉLEFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>CIUDAD</th>
                    </thead>
                    <tbody>
                        @foreach ($participants as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->nit }}</td>
                            <td>{{ $p->phone }}</td>
                            <td>{{ $p->address }}</td>
                            <td>{{ $p->city }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <center><button class="btn btn-success">DESCARGAR EXCEL</button></center>
        </div>

    </div>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@vite(['resources/js/participants.js'])
</html>
