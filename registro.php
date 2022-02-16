<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
<h1>Registrarse</h1>

<div class="container">
    <div class="row">
    <form class="col s12" action="guardar_registro.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="input_text" type="text" data-length="10" name="nombre" required>
                <label class="light-blue-text text-darken-4" for="input_text">Nombre:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="input_text" type="text" data-length="10" name="apellido" required>
                <label class="light-blue-text text-darken-4" for="input_text">Apellido:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="input_text" type="text" data-length="10" name="cedula" required>
                <label class="light-blue-text text-darken-4" for="input_text">Cédula:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="email" type="text" data-length="10" name="correo" required>
                <label class="light-blue-text text-darken-4" for="email">Correo:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="input_text" type="text" data-length="10" name="contraseña" required>
                <label class="light-blue-text text-darken-4" for="input_text">Contraseña:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Registrarse</button>
            </div>
        </div>
    </form>
    </div>

</div>

<!--SCRIPT-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>