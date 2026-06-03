<?php

require_once "funciones.php";

$publicaciones = obtenerPublicaciones(8);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RA9_f - Servicio externo</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef2f5;
            color: #222;
        }

        header {
            background: #0b5ed7;
            color: white;
            padding: 25px;
            text-align: center;
        }

        nav {
            background: #073f91;
            padding: 12px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .contenedor {
            max-width: 1000px;
            margin: 35px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        .datos {
            background: #f5f8fb;
            border-left: 5px solid #0b5ed7;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        .datos p {
            margin: 6px 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
            margin-top: 25px;
        }

        .tarjeta {
            background: #f8f9fa;
            border-left: 5px solid #0b5ed7;
            padding: 18px;
            border-radius: 8px;
        }

        .tarjeta h3 {
            margin-top: 0;
            color: #0b5ed7;
            font-size: 18px;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        footer {
            text-align: center;
            color: #666;
            margin: 30px;
        }
    </style>
</head>
<body>

<header>
    <h1>RA9_f - Servicio Web Externo</h1>
    <p>Consumo de una API REST pública con PHP</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="servicio.php">Servicio externo</a>
    <a href="documentacion.php">Pruebas y documentación</a>
</nav>

<div class="contenedor">

    <div class="datos">
        <p><strong>Nombre:</strong> Luis Gutierrez Alandete</p>
        <p><strong>DNI:</strong> 20962195H</p>
        <p><strong>API utilizada:</strong> JSONPlaceholder</p>
        <p><strong>Tipo de datos:</strong> Publicaciones en formato JSON</p>
    </div>

    <h2>Publicaciones obtenidas desde la API</h2>

    <p>
        Esta página utiliza <strong>file_get_contents()</strong> para obtener datos desde un servicio web externo.
        La respuesta llega en formato JSON y se transforma a un array PHP mediante <strong>json_decode()</strong>.
    </p>

    <?php if (empty($publicaciones)) { ?>

        <p class="error">
            No se han podido obtener datos de la API externa.
        </p>

    <?php } else { ?>

        <div class="grid">

            <?php foreach ($publicaciones as $publicacion) { ?>

                <div class="tarjeta">
                    <h3><?php echo limpiarTexto($publicacion["title"]); ?></h3>

                    <p>
                        <?php echo limpiarTexto(recortarTexto($publicacion["body"], 140)); ?>
                    </p>

                    <p>
                        <strong>ID publicación:</strong>
                        <?php echo limpiarTexto($publicacion["id"]); ?>
                    </p>

                    <p>
                        <strong>ID usuario:</strong>
                        <?php echo limpiarTexto($publicacion["userId"]); ?>
                    </p>
                </div>

            <?php } ?>

        </div>

    <?php } ?>

</div>

<footer>
    DWES9 - Servicio web externo con PHP
</footer>

</body>
</html>