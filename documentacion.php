<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RA9_h - Pruebas y documentación</title>

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

        .bloque {
            background: #f8f9fa;
            border-left: 5px solid #0b5ed7;
            padding: 18px;
            margin-top: 18px;
            border-radius: 8px;
        }

        code, pre {
            background: #eeeeee;
            padding: 4px 6px;
            border-radius: 4px;
        }

        pre {
            padding: 12px;
            overflow-x: auto;
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
    <h1>RA9_h - Pruebas, depuración y documentación</h1>
    <p>Prueba de carga con JMeter y documentación con PHPDoc</p>
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
        <p><strong>Actividad:</strong> RA9_h - Pruebas, depuración y documentación</p>
    </div>

    <div class="bloque">
        <h2>Aplicación desarrollada</h2>

        <p>
            La aplicación permite navegar entre una página principal y una página que consume
            un servicio web externo en formato JSON. La navegación se realiza mediante el menú superior.
        </p>

        <ul>
            <li><strong>index.php:</strong> página principal de la aplicación.</li>
            <li><strong>servicio.php:</strong> página que consume una API REST externa.</li>
            <li><strong>funciones.php:</strong> archivo con funciones PHP documentadas con PHPDoc.</li>
            <li><strong>documentacion.php:</strong> página explicativa de pruebas y documentación.</li>
        </ul>
    </div>

    <div class="bloque">
        <h2>Prueba con JMeter</h2>

        <p>
            Para comprobar el rendimiento de la aplicación se realiza una prueba de carga con JMeter
            sobre la página <strong>servicio.php</strong>.
        </p>

        <p>Configuración utilizada en <strong>Concurrency Thread Group</strong>:</p>

        <ul>
            <li><strong>Target Concurrency:</strong> 200 usuarios.</li>
            <li><strong>Ramp Up Time:</strong> 10 minutos.</li>
            <li><strong>Ramp-Up Steps Count:</strong> 10.</li>
            <li><strong>Hold Target Rate Time:</strong> 5 minutos.</li>
        </ul>

        <p>Petición HTTP configurada:</p>

        <pre>Servidor: localhost
Ruta: /DWES9/servicio.php
Método: GET</pre>
    </div>

    <div class="bloque">
        <h2>Documentación PHPDoc</h2>

        <p>
            Las funciones creadas en el archivo <strong>funciones.php</strong> están comentadas
            utilizando la sintaxis básica de PHPDoc.
        </p>

        <p>Funciones documentadas:</p>

        <ul>
            <li><code>obtenerPublicaciones($limite)</code></li>
            <li><code>limpiarTexto($texto)</code></li>
            <li><code>recortarTexto($texto, $longitud)</code></li>
        </ul>

        <p>
            Cada función incluye un comentario <code>/** */</code>, además de las etiquetas
            <code>@param</code> y <code>@return</code>.
        </p>
    </div>

    <div class="bloque">
        <h2>Generación de documentación con PHPDocumentor</h2>

        <p>
            Para generar la documentación se puede utilizar el archivo <strong>phpDocumentor.phar</strong>.
        </p>

        <p>Comando utilizado:</p>

        <pre>c:\xampp\php\bin\php.exe phpDocumentor.phar -d c:\xampp\htdocs\DWES9 -t c:\xampp\htdocs\doc_dwes9</pre>

        <p>
            El parámetro <strong>-d</strong> indica el directorio del proyecto y el parámetro
            <strong>-t</strong> indica el directorio donde se genera la documentación.
        </p>
    </div>

</div>

<footer>
    DWES9 - Pruebas y documentación
</footer>

</body>
</html>