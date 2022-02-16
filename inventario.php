<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <h1>Inventario</h1>

    <div class="fondo-section">
        <div class="container section black-text">

            <div class="section">

                <?php

                include_once("conexion.php");

                $correo = $_GET['usuario'];

                ?>

            </div>

            <div class="container">
                <div class="row">
                    <?php
                        echo '<form class="col s12" action="agregar_inventario.php?usuario='.$correo.'" method="post">';
                    ?>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="input_text" type="text" data-length="10" name="producto" required>
                            <label class="light-blue-text text-darken-4" for="input_text">Producto:</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="input_text" type="text" data-length="10" name="cantidad" required>
                            <label class="light-blue-text text-darken-4" for="input_text">Cantidad:</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="input_text" type="text" data-length="10" name="precio" required>
                            <label class="light-blue-text text-darken-4" for="input_text">Precio:</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Mostrar inventario</button>
                        </div>
                    </div>
                </form>

                    <div class="row">
                        <div class="input-field col s6">
                            <a href="index.php" class="waves-effect waves-light btn blue lighten-2">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
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