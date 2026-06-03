<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DWES9 - Aplicación Web Híbrida</title>

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
            max-width: 900px;
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

        .bloque {
            background: #f8f9fa;
            padding: 18px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 5px solid #0b5ed7;
        }

        .boton {
            display: inline-block;
            background: #0b5ed7;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 10px;
            font-weight: bold;
        }

        .boton:hover {
            background: #084298;
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
    <h1>DWES9 - Aplicación Web Híbrida</h1>
    <p>Uso de servicios externos, repositorios, pruebas y documentación</p>
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
        <p><strong>Actividad:</strong> RA9 - Desarrollo de aplicaciones Web híbridas</p>
    </div>

    <h2>Página principal de la tarea</h2>

    <p>
        Esta página permite probar la aplicación desarrollada para la tarea DWES9.
        Desde el menú superior se puede acceder a todas las páginas creadas para los apartados de la tarea.
    </p>

    <div class="bloque">
        <h3>RA9_d - Repositorio</h3>
        <p>
            En este apartado se publica el código fuente de la tarea en un repositorio GitHub.
        </p>
        <p>
            <strong>Repositorio:</strong>
            https://github.com/Aluis99/DWES9-aplicacion-hibrida
        </p>
    </div>

    <div class="bloque">
        <h3>RA9_f - Servicio web externo</h3>
        <p>
            En este apartado se consume una API REST pública que devuelve datos en formato JSON.
            La aplicación obtiene esos datos con PHP mediante <strong>file_get_contents()</strong>
            y los muestra en una página web.
        </p>

        <a class="boton" href="servicio.php">Probar servicio externo</a>
    </div>

    <div class="bloque">
        <h3>RA9_h - Pruebas, depuración y documentación</h3>
        <p>
            En este apartado se documentan las funciones creadas con PHPDoc y se prepara la prueba
            de carga con JMeter utilizando el componente Concurrency Thread Group.
        </p>

        <a class="boton" href="documentacion.php">Ver pruebas y documentación</a>
    </div>

</div>

<footer>
    DWES9 - Desarrollo de aplicaciones Web híbridas
</footer>

</body>
</html>